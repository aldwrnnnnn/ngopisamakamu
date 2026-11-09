// Interactive features for Ngopi Sama Kamu
document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    function toggleMobileMenu(open) {
        if (!mobileMenu || !mobileMenuButton) return;
        const isOpen = open !== undefined ? open : mobileMenu.classList.contains('hidden');
        if (isOpen) {
            mobileMenu.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'true');
        } else {
            mobileMenu.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }
    }

    // Expose to window so inline onclick handlers in Blade can call it
    window.toggleMobileMenu = toggleMobileMenu;

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', () => toggleMobileMenu());
    }
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', () => toggleMobileMenu(false));
    }
    if (mobileMenu) {
        // Dismiss drawer when tapping the dark backdrop
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                toggleMobileMenu(false);
            }
        });
    }
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => toggleMobileMenu(false));
    });

    // 2. Menu Filter Tabs
    const filterButtons = document.querySelectorAll('.menu-filter-btn');
    const menuItems = document.querySelectorAll('.menu-card-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-category');

            // Update active button state
            filterButtons.forEach(b => {
                b.classList.remove('bg-[#1A1310]', 'text-white', 'shadow-sm');
                b.classList.add('bg-white', 'text-[#524136]', 'border-[#E8E1D4]');
                b.setAttribute('aria-pressed', 'false');
            });
            btn.classList.add('bg-[#1A1310]', 'text-white', 'shadow-sm');
            btn.classList.remove('bg-white', 'text-[#524136]', 'border-[#E8E1D4]');
            btn.setAttribute('aria-pressed', 'true');

            // Filter menu items
            menuItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // 3. Interactive Order Modal & WhatsApp Order Generator
    const orderModal = document.getElementById('order-modal');
    const orderModalBackdrop = document.getElementById('order-modal-backdrop');
    const orderModalClose = document.getElementById('order-modal-close');
    const orderForm = document.getElementById('order-form');
    const orderItemSelect = document.getElementById('order-item-select');
    const orderTempInputs = document.querySelectorAll('input[name="order_temp"]');
    const orderSugarInputs = document.querySelectorAll('input[name="order_sugar"]');
    const orderQtyInput = document.getElementById('order-qty');
    const orderNotesInput = document.getElementById('order-notes');
    const orderCustomerName = document.getElementById('order-name');
    const openOrderButtons = document.querySelectorAll('.open-order-btn');
    const tempContainer = document.getElementById('order-temp-container');
    const sugarContainer = document.getElementById('order-sugar-container');

    const foodItems = [
        'Croissant Butter Renyah',
        'Donat Kentang Gula Dingin',
        'Pisang Goreng Wijen Madu'
    ];

    function updateModalFormFields(selectedItem) {
        const isFood = foodItems.includes(selectedItem);
        if (tempContainer) {
            tempContainer.style.display = isFood ? 'none' : 'block';
        }
        if (sugarContainer) {
            sugarContainer.style.display = isFood ? 'none' : 'block';
        }
    }

    if (orderItemSelect) {
        orderItemSelect.addEventListener('change', () => {
            updateModalFormFields(orderItemSelect.value);
        });
    }

    window.openOrderModal = function(itemName = '') {
        if (!orderModal) return;
        if (itemName && orderItemSelect) {
            orderItemSelect.value = itemName;
        }
        updateModalFormFields(orderItemSelect ? orderItemSelect.value : '');

        orderModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        if (orderCustomerName) orderCustomerName.focus();
    };

    window.closeOrderModal = function() {
        if (!orderModal) return;
        orderModal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    };

    openOrderButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const item = btn.getAttribute('data-item-name') || '';
            window.openOrderModal(item);
        });
    });

    if (orderModalClose) {
        orderModalClose.addEventListener('click', window.closeOrderModal);
    }
    if (orderModalBackdrop) {
        orderModalBackdrop.addEventListener('click', window.closeOrderModal);
    }

    if (orderForm) {
        orderForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = orderCustomerName ? orderCustomerName.value.trim() : '';
            const item = orderItemSelect ? orderItemSelect.value : '';
            const qty = orderQtyInput ? orderQtyInput.value : '1';
            const notes = orderNotesInput ? orderNotesInput.value.trim() : '';
            const isFood = foodItems.includes(item);

            let temp = 'Dingin (Es)';
            orderTempInputs.forEach(input => {
                if (input.checked) temp = input.value;
            });

            let sugar = 'Normal';
            orderSugarInputs.forEach(input => {
                if (input.checked) sugar = input.value;
            });

            // Compose clean, polite, and contextual WhatsApp text
            let message = isFood
                ? `Halo Ngopi Sama Kamu! Saya mau pesan menu camilan:\n\n`
                : `Halo Ngopi Sama Kamu! Saya mau pesan kopi/minuman:\n\n`;

            if (name) {
                message += `*Nama:* ${name}\n`;
            }
            message += `*Pesanan:* ${qty}x ${item}\n`;

            // Only add Temperature and Sugar levels for drinks
            if (!isFood) {
                message += `*Suhu:* ${temp}\n`;
                message += `*Tingkat Gula:* ${sugar}\n`;
            }

            if (notes) {
                message += `*Catatan Khusus:* ${notes}\n`;
            }
            message += `\nMohon konfirmasi ketersediaan dan total pembayarannya. Terima kasih!`;

            const encoded = encodeURIComponent(message);
            const waUrl = `https://wa.me/6281529434240?text=${encoded}`;
            window.open(waUrl, '_blank', 'noopener,noreferrer');
            window.closeOrderModal();
        });
    }

    // 4. FAQ Accordion
    const faqButtons = document.querySelectorAll('.faq-accordion-btn');
    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            const expanded = button.getAttribute('aria-expanded') === 'true';
            const content = button.nextElementSibling;
            const icon = button.querySelector('.faq-icon');

            // Toggle current item
            button.setAttribute('aria-expanded', !expanded);
            if (!expanded) {
                content.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                if (icon) icon.style.transform = 'rotate(0deg)';
            }
        });
    });

    // 5. Copy Address Button
    const copyAddressBtn = document.getElementById('copy-address-btn');
    if (copyAddressBtn) {
        copyAddressBtn.addEventListener('click', () => {
            const addressText = 'Abiansemal, Badung, Bali';
            navigator.clipboard.writeText(addressText).then(() => {
                const originalHtml = copyAddressBtn.innerHTML;
                copyAddressBtn.innerHTML = `
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Alamat Tersalin!</span>
                `;
                setTimeout(() => {
                    copyAddressBtn.innerHTML = originalHtml;
                }, 2000);
            }).catch(() => {
                alert('Alamat: ' + addressText);
            });
        });
    }

    // 6. Global Escape key handler for accessible dialog closing
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            toggleMobileMenu(false);
            window.closeOrderModal();
        }
    });
});
