<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">

            <span class="app-brand-text demo menu-text fw-bold ms-0 text-primary">บางปะหันบรรจุภัณฑ์</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">เมนู Admin</span></li>
        <li class="menu-item" data-menu="dashboard">
            <a href="../dashboard/index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-home"></i>
                <div data-i18n="Basic">Dashboard</div>

            </a>
        </li>
        <li class="menu-item active open" data-menu="material">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">จัดการข้อมูลวัตถุดิบ</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item active" data-menu="product">
                    <a href="../product/index.php" class="menu-link">
                        <div data-i18n="Alerts">ข้อมูลสินค้า</div>
                    </a>
                </li>
                <li class="menu-item" data-menu="producttype">
                    <a href="../producttype/index.php" class="menu-link">
                        <div data-i18n="Badges">ข้อมูลประเภทสินค้า</div>
                    </a>
                </li>
                <li class="menu-item" data-menu="productgroup">
                    <a href="../productgroup/index.php" class="menu-link">
                        <div data-i18n="Badges">ข้อมูลกลุ่มสินค้า</div>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
</aside>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function handleMenuItemClick(clickedItem) {
            document.querySelectorAll('.menu-item').forEach(function(item) {
                item.classList.remove('active');
            });
            clickedItem.classList.add('active');
            sessionStorage.setItem('menu', clickedItem.getAttribute('data-menu'));
        }

        document.querySelectorAll('.menu-item').forEach(function(item) {
            item.addEventListener('click', function() {
                handleMenuItemClick(item);
            });
        });

        var storedMenu = sessionStorage.getItem('menu');
        if (storedMenu) {
            document.querySelectorAll('.menu-item').forEach(function(item) {
                if (item.getAttribute('data-menu') === storedMenu) {
                    handleMenuItemClick(item);
                }
            });
        }
    });
</script>