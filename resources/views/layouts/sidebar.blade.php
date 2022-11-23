<ul class="navbar-nav sidebar accordion" id="accordionSidebar">
    
    <a class="sidebar-brand topbar-bg d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon ">
            <img src="{{ asset('assets/img/LogoX.png') }}" width="100">
        </div>
    </a><br>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'dashboard' ? 'main-active' : '' }}" href="{{ route('dashboard') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.088 4.95453C19.0806 4.94672 19.0784 4.93634 19.0708 4.92871C19.0632 4.92108 19.0526 4.91876 19.0447 4.91138C17.1743 3.04693 14.641 2 12 2C9.35902 2 6.82573 3.04693 4.95526 4.91138C4.94739 4.91876 4.93689 4.92102 4.9292 4.92871C4.92151 4.9364 4.91937 4.94671 4.91205 4.95453C3.51831 6.35495 2.57065 8.13686 2.18867 10.0754C1.80669 12.0139 2.00751 14.0221 2.76579 15.8465C3.52407 17.671 4.80582 19.23 6.44927 20.3267C8.09273 21.4234 10.0242 22.0087 12 22.0087C13.9758 22.0087 15.9073 21.4234 17.5507 20.3267C19.1942 19.23 20.4759 17.671 21.2342 15.8465C21.9925 14.0221 22.1933 12.0139 21.8113 10.0754C21.4294 8.13686 20.4817 6.35495 19.088 4.95453ZM12 20C10.8022 19.9996 9.61992 19.7298 8.54062 19.2104C7.46132 18.6911 6.51268 17.9357 5.76495 17H9.78022C10.0583 17.3144 10.4 17.5661 10.7827 17.7385C11.1653 17.9109 11.5802 18 12 18C12.4197 18 12.8346 17.9109 13.2172 17.7385C13.5999 17.5661 13.9416 17.3144 14.2197 17H18.235C17.4873 17.9357 16.5386 18.6911 15.4593 19.2105C14.38 19.7298 13.1977 19.9996 12 20ZM11 15C11 14.8022 11.0586 14.6089 11.1685 14.4444C11.2784 14.28 11.4345 14.1518 11.6173 14.0761C11.8 14.0004 12.0011 13.9806 12.195 14.0192C12.389 14.0578 12.5672 14.153 12.7071 14.2929C12.8469 14.4327 12.9422 14.6109 12.9807 14.8049C13.0193 14.9989 12.9995 15.2 12.9238 15.3827C12.8481 15.5654 12.72 15.7216 12.5555 15.8315C12.3911 15.9413 12.1977 16 12 16C11.7348 15.9997 11.4806 15.8943 11.2931 15.7068C11.1057 15.5193 11.0002 15.2651 11 15ZM19.4102 15.0021L19.3999 15H15C14.9981 14.3816 14.8048 13.779 14.4467 13.2748C14.0886 12.7707 13.5832 12.3897 13 12.1843V9C13 8.73478 12.8946 8.48043 12.7071 8.29289C12.5195 8.10536 12.2652 8 12 8C11.7347 8 11.4804 8.10536 11.2928 8.29289C11.1053 8.48043 11 8.73478 11 9V12.1843C10.4167 12.3897 9.91132 12.7707 9.55322 13.2748C9.19512 13.779 9.00186 14.3816 8.99995 15H4.60005L4.58973 15.0021C4.32963 14.3603 4.1547 13.6872 4.06941 13H4.99995C5.26517 13 5.51952 12.8946 5.70706 12.7071C5.8946 12.5196 5.99995 12.2652 5.99995 12C5.99995 11.7348 5.8946 11.4804 5.70706 11.2929C5.51952 11.1054 5.26517 11 4.99995 11H4.06941C4.2481 9.57857 4.80751 8.23182 5.68849 7.10211L6.34321 7.75684C6.43606 7.84969 6.54629 7.92334 6.6676 7.97359C6.78892 8.02384 6.91894 8.0497 7.05025 8.0497C7.18156 8.0497 7.31158 8.02384 7.43289 7.97359C7.5542 7.92334 7.66443 7.84968 7.75728 7.75683C7.85013 7.66398 7.92378 7.55376 7.97403 7.43244C8.02428 7.31113 8.05014 7.18111 8.05014 7.0498C8.05014 6.91849 8.02428 6.78847 7.97403 6.66716C7.92378 6.54585 7.85012 6.43562 7.75727 6.34277L7.10261 5.68811C8.23224 4.80741 9.57877 4.24817 11 4.06946V5C11 5.26522 11.1053 5.51957 11.2928 5.70711C11.4804 5.89464 11.7347 6 12 6C12.2652 6 12.5195 5.89464 12.7071 5.70711C12.8946 5.51957 13 5.26522 13 5V4.06946C14.4211 4.24817 15.7677 4.80741 16.8973 5.68811L16.2426 6.34277C16.0551 6.53029 15.9498 6.78461 15.9498 7.0498C15.9498 7.31499 16.0551 7.56932 16.2426 7.75683C16.4301 7.94435 16.6845 8.0497 16.9497 8.0497C17.2148 8.0497 17.4692 7.94436 17.6567 7.75684L18.3114 7.10211C19.1924 8.23182 19.7518 9.57857 19.9305 11H19C18.7347 11 18.4804 11.1054 18.2928 11.2929C18.1053 11.4804 18 11.7348 18 12C18 12.2652 18.1053 12.5196 18.2928 12.7071C18.4804 12.8946 18.7347 13 19 13H19.9305C19.8452 13.6872 19.6703 14.3603 19.4102 15.0021Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Dashboard</span>
        </a>
    </li>

    <li class="nav-item ">
        <a class="nav-link {{ Request::segment(1) =='product-setup' ? 'main-active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.47 7.37005C20.47 7.37005 20.47 7.37005 20.47 7.29005L20.41 7.14005C20.3891 7.10822 20.3657 7.07812 20.34 7.05005C20.3133 7.00772 20.2832 6.96759 20.25 6.93005L20.16 6.86005L20 6.78005L12.5 2.15005C12.3411 2.05072 12.1574 1.99805 11.97 1.99805C11.7826 1.99805 11.599 2.05072 11.44 2.15005L4.00002 6.78005L3.91002 6.86005L3.82002 6.93005C3.78687 6.96759 3.75678 7.00772 3.73002 7.05005C3.70431 7.07812 3.68091 7.10822 3.66002 7.14005L3.60002 7.29005C3.60002 7.29005 3.60002 7.29005 3.60002 7.37005C3.59019 7.45644 3.59019 7.54366 3.60002 7.63005V16.3701C3.59968 16.54 3.64266 16.7072 3.72489 16.8559C3.80713 17.0047 3.92591 17.13 4.07002 17.22L11.57 21.85C11.6162 21.8786 11.6669 21.8989 11.72 21.91C11.72 21.91 11.77 21.91 11.8 21.91C11.9692 21.9637 12.1508 21.9637 12.32 21.91C12.32 21.91 12.37 21.91 12.4 21.91C12.4531 21.8989 12.5039 21.8786 12.55 21.85L20 17.22C20.1441 17.13 20.2629 17.0047 20.3452 16.8559C20.4274 16.7072 20.4704 16.54 20.47 16.3701V7.63005C20.4799 7.54366 20.4799 7.45644 20.47 7.37005ZM11 19.21L5.50002 15.8101V9.43005L11 12.82V19.21ZM12 11.09L6.40002 7.63005L12 4.18005L17.6 7.63005L12 11.09ZM18.5 15.8101L13 19.21V12.82L18.5 9.43005V15.8101Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Product Setup</span>
        </a>
        <div id="collapse1" class="collapse {{ Request::segment(2) =='categories' || Request::segment(2) =='colors' || Request::segment(2) =='types' || Request::segment(2) =='template-slots' || Request::segment(2) =='time-slots' || Request::segment(2) =='date-slots' || Request::segment(2) =='product-filters' || Request::segment(2) =='addon-categories' || Request::segment(2) =='time-slots-gaps' ? 'show' : '' }}"  aria-labelledby="heading1" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='categories' ? 'active': '' }}" href="{{ route('categories.index') }}">Categories</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='colors' ? 'active': '' }}" href="{{ route('colors.index') }}">Colors</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='types' ? 'active': '' }}" href="{{ route('types.index') }}">Types</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='template-slots' ? 'active': '' }}" href="{{ route('template-slots.index') }}">Template Slots</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='time-slots' ? 'active': '' }}" href="{{ route('time-slots.index') }}">Time Slots</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='date-slots' ? 'active': '' }}" href="{{ route('date-slots.index') }}">Date Slots</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='product-filters' ? 'active': '' }}" href="{{ route('product-filters.index') }}">Product Filter</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='addon-categories' ? 'active': '' }}" href="{{ route('addon-categories.index') }}">Addon Categories</a>
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='time-slots-gaps' ? 'active': '' }}" href="{{ route('time-slots-gaps.index') }}">Timeslots Gap</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'discount-codes' ? 'main-active' : '' }}" href="{{ route('discount-codes.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 1C10.6234 1.00173 9.27794 1.40929 8.13179 2.17171C6.98564 2.93413 6.08973 4.01757 5.55612 5.28651C5.0225 6.55544 4.87487 7.95355 5.13169 9.30595C5.38851 10.6583 6.03838 11.905 7.00002 12.89V22C7.00053 22.1705 7.04461 22.338 7.12808 22.4866C7.21154 22.6352 7.33162 22.7601 7.4769 22.8492C7.62218 22.9384 7.78784 22.989 7.95816 22.9961C8.12847 23.0032 8.29779 22.9667 8.45002 22.89L12 21.12L15.55 22.89C15.6893 22.9614 15.8435 22.9991 16 23C16.1872 23.0006 16.3709 22.9486 16.53 22.85C16.6741 22.7599 16.7929 22.6346 16.8751 22.4859C16.9574 22.3372 17.0004 22.1699 17 22V12.89C17.9616 11.905 18.6115 10.6583 18.8683 9.30595C19.1252 7.95355 18.9775 6.55544 18.4439 5.28651C17.9103 4.01757 17.0144 2.93413 15.8682 2.17171C14.7221 1.40929 13.3766 1.00173 12 1ZM15 20.38L12.45 19.11C12.3104 19.0397 12.1563 19.003 12 19.003C11.8437 19.003 11.6896 19.0397 11.55 19.11L9.00002 20.38V14.32C9.63294 14.6189 10.3071 14.8211 11 14.92V16C11 16.2652 11.1054 16.5196 11.2929 16.7071C11.4804 16.8946 11.7348 17 12 17C12.2652 17 12.5196 16.8946 12.7071 16.7071C12.8947 16.5196 13 16.2652 13 16V14.92C13.6929 14.8211 14.3671 14.6189 15 14.32V20.38ZM12 13C11.0111 13 10.0444 12.7068 9.22216 12.1573C8.39992 11.6079 7.75906 10.827 7.38062 9.91342C7.00218 8.99979 6.90316 7.99445 7.09609 7.02455C7.28902 6.05464 7.76522 5.16373 8.46448 4.46447C9.16374 3.7652 10.0547 3.289 11.0246 3.09607C11.9945 2.90315 12.9998 3.00216 13.9134 3.3806C14.8271 3.75904 15.608 4.3999 16.1574 5.22215C16.7068 6.04439 17 7.01109 17 8C17 9.32608 16.4732 10.5979 15.5355 11.5355C14.5979 12.4732 13.3261 13 12 13Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Discount Codes</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'banners' ? 'main-active' : '' }}" href="{{ route('banners.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 11H18C18.2652 11 18.5196 10.8946 18.7071 10.7071C18.8946 10.5196 19 10.2652 19 10V9C19 8.73478 18.8946 8.48043 18.7071 8.29289C18.5196 8.10536 18.2652 8 18 8H17C16.7348 8 16.4804 8.10536 16.2929 8.29289C16.1054 8.48043 16 8.73478 16 9V10C16 10.2652 16.1054 10.5196 16.2929 10.7071C16.4804 10.8946 16.7348 11 17 11ZM6 12H11C11.2652 12 11.5196 11.8946 11.7071 11.7071C11.8946 11.5196 12 11.2652 12 11C12 10.7348 11.8946 10.4804 11.7071 10.2929C11.5196 10.1054 11.2652 10 11 10H6C5.73478 10 5.48043 10.1054 5.29289 10.2929C5.10536 10.4804 5 10.7348 5 11C5 11.2652 5.10536 11.5196 5.29289 11.7071C5.48043 11.8946 5.73478 12 6 12ZM22 4H2C1.73478 4 1.48043 4.10536 1.29289 4.29289C1.10536 4.48043 1 4.73478 1 5V19C1 19.2652 1.10536 19.5196 1.29289 19.7071C1.48043 19.8946 1.73478 20 2 20H22C22.2652 20 22.5196 19.8946 22.7071 19.7071C22.8946 19.5196 23 19.2652 23 19V5C23 4.73478 22.8946 4.48043 22.7071 4.29289C22.5196 4.10536 22.2652 4 22 4ZM21 18H3V6H21V18ZM6 16H11C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15C12 14.7348 11.8946 14.4804 11.7071 14.2929C11.5196 14.1054 11.2652 14 11 14H6C5.73478 14 5.48043 14.1054 5.29289 14.2929C5.10536 14.4804 5 14.7348 5 15C5 15.2652 5.10536 15.5196 5.29289 15.7071C5.48043 15.8946 5.73478 16 6 16Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Banners</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'collaborations' ? 'main-active' : '' }}" href="{{ route('collaborations.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 20H21V8H22C22.2652 8 22.5196 7.89464 22.7071 7.70711C22.8946 7.51957 23 7.26522 23 7C23 6.73478 22.8946 6.48043 22.7071 6.29289C22.5196 6.10536 22.2652 6 22 6H21V3C21 2.73478 20.8946 2.48043 20.7071 2.29289C20.5196 2.10536 20.2652 2 20 2H4C3.73478 2 3.48043 2.10536 3.29289 2.29289C3.10536 2.48043 3 2.73478 3 3V6H2C1.73478 6 1.48043 6.10536 1.29289 6.29289C1.10536 6.48043 1 6.73478 1 7C1 7.26522 1.10536 7.51957 1.29289 7.70711C1.48043 7.89464 1.73478 8 2 8H3V20H2C1.73478 20 1.48043 20.1054 1.29289 20.2929C1.10536 20.4804 1 20.7348 1 21C1 21.2652 1.10536 21.5196 1.29289 21.7071C1.48043 21.8946 1.73478 22 2 22H22C22.2652 22 22.5196 21.8946 22.7071 21.7071C22.8946 21.5196 23 21.2652 23 21C23 20.7348 22.8946 20.4804 22.7071 20.2929C22.5196 20.1054 22.2652 20 22 20ZM15 20H9V16.47C8.99759 15.3982 9.27261 14.3441 9.79831 13.4101C10.324 12.4761 11.0825 11.694 12 11.14C12.9175 11.694 13.676 12.4761 14.2017 13.4101C14.7274 14.3441 15.0024 15.3982 15 16.47V20ZM19 20H17V16.47C17.0067 14.9403 16.5838 13.4394 15.7794 12.1382C14.975 10.837 13.8214 9.7878 12.45 9.11C12.3104 9.03967 12.1563 9.00303 12 9.00303C11.8437 9.00303 11.6896 9.03967 11.55 9.11C10.1786 9.7878 9.02504 10.837 8.22064 12.1382C7.41624 13.4394 6.99331 14.9403 7 16.47V20H5V8H19V20ZM19 6H5V4H19V6Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Collaborations</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'products' ? 'main-active' : '' }}" href="{{ route('products.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 6H16V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V6H5C4.20435 6 3.44129 6.31607 2.87868 6.87868C2.31607 7.44129 2 8.20435 2 9V18C2 18.7956 2.31607 19.5587 2.87868 20.1213C3.44129 20.6839 4.20435 21 5 21H19C19.7956 21 20.5587 20.6839 21.1213 20.1213C21.6839 19.5587 22 18.7956 22 18V9C22 8.20435 21.6839 7.44129 21.1213 6.87868C20.5587 6.31607 19.7956 6 19 6ZM10 5H14V6H10V5ZM20 18C20 18.2652 19.8946 18.5196 19.7071 18.7071C19.5196 18.8946 19.2652 19 19 19H5C4.73478 19 4.48043 18.8946 4.29289 18.7071C4.10536 18.5196 4 18.2652 4 18V12.39L8.68 14C8.78618 14.0144 8.89382 14.0144 9 14H15C15.1084 13.998 15.2161 13.9812 15.32 13.95L20 12.39V18ZM20 10.28L14.84 12H9.16L4 10.28V9C4 8.73478 4.10536 8.48043 4.29289 8.29289C4.48043 8.10536 4.73478 8 5 8H19C19.2652 8 19.5196 8.10536 19.7071 8.29289C19.8946 8.48043 20 8.73478 20 9V10.28Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Products</span>
        </a>
    </li>
         
    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'addon-products' ? 'main-active' : '' }}" href="{{ route('addon-products.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 9H11V7C11 6.73478 10.8946 6.48043 10.7071 6.29289C10.5196 6.10536 10.2652 6 10 6C9.73478 6 9.48043 6.10536 9.29289 6.29289C9.10536 6.48043 9 6.73478 9 7V9H7C6.73478 9 6.48043 9.10536 6.29289 9.29289C6.10536 9.48043 6 9.73478 6 10C6 10.2652 6.10536 10.5196 6.29289 10.7071C6.48043 10.8946 6.73478 11 7 11H9V13C9 13.2652 9.10536 13.5196 9.29289 13.7071C9.48043 13.8946 9.73478 14 10 14C10.2652 14 10.5196 13.8946 10.7071 13.7071C10.8946 13.5196 11 13.2652 11 13V11H13C13.2652 11 13.5196 10.8946 13.7071 10.7071C13.8946 10.5196 14 10.2652 14 10C14 9.73478 13.8946 9.48043 13.7071 9.29289C13.5196 9.10536 13.2652 9 13 9ZM18 15V5C18 4.20435 17.6839 3.44129 17.1213 2.87868C16.5587 2.31607 15.7956 2 15 2H5C4.20435 2 3.44129 2.31607 2.87868 2.87868C2.31607 3.44129 2 4.20435 2 5V15C2 15.7956 2.31607 16.5587 2.87868 17.1213C3.44129 17.6839 4.20435 18 5 18H15C15.7956 18 16.5587 17.6839 17.1213 17.1213C17.6839 16.5587 18 15.7956 18 15ZM4 15V5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H15C15.2652 4 15.5196 4.10536 15.7071 4.29289C15.8946 4.48043 16 4.73478 16 5V15C16 15.2652 15.8946 15.5196 15.7071 15.7071C15.5196 15.8946 15.2652 16 15 16H5C4.73478 16 4.48043 15.8946 4.29289 15.7071C4.10536 15.5196 4 15.2652 4 15ZM21 6C20.7348 6 20.4804 6.10536 20.2929 6.29289C20.1054 6.48043 20 6.73478 20 7V17C20 17.7956 19.6839 18.5587 19.1213 19.1213C18.5587 19.6839 17.7956 20 17 20H7C6.73478 20 6.48043 20.1054 6.29289 20.2929C6.10536 20.4804 6 20.7348 6 21C6 21.2652 6.10536 21.5196 6.29289 21.7071C6.48043 21.8946 6.73478 22 7 22H17C18.3261 22 19.5979 21.4732 20.5355 20.5355C21.4732 19.5979 22 18.3261 22 17V7C22 6.73478 21.8946 6.48043 21.7071 6.29289C21.5196 6.10536 21.2652 6 21 6Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Addon Products</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'warehouses' ? 'main-active' : '' }}" href="{{ route('warehouses.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 2H2C1.73478 2 1.48043 2.10536 1.29289 2.29289C1.10536 2.48043 1 2.73478 1 3V7C1.00174 7.61894 1.19488 8.2222 1.55294 8.72707C1.911 9.23193 2.41645 9.61369 3 9.82V21C3 21.2652 3.10536 21.5196 3.29289 21.7071C3.48043 21.8946 3.73478 22 4 22H20C20.2652 22 20.5196 21.8946 20.7071 21.7071C20.8946 21.5196 21 21.2652 21 21V9.82C21.5835 9.61369 22.089 9.23193 22.4471 8.72707C22.8051 8.2222 22.9983 7.61894 23 7V3C23 2.73478 22.8946 2.48043 22.7071 2.29289C22.5196 2.10536 22.2652 2 22 2ZM15 4H17V7C17 7.26522 16.8946 7.51957 16.7071 7.70711C16.5196 7.89464 16.2652 8 16 8C15.7348 8 15.4804 7.89464 15.2929 7.70711C15.1054 7.51957 15 7.26522 15 7V4ZM11 4H13V7C13 7.26522 12.8946 7.51957 12.7071 7.70711C12.5196 7.89464 12.2652 8 12 8C11.7348 8 11.4804 7.89464 11.2929 7.70711C11.1054 7.51957 11 7.26522 11 7V4ZM7 4H9V7C9 7.26522 8.89464 7.51957 8.70711 7.70711C8.51957 7.89464 8.26522 8 8 8C7.73478 8 7.48043 7.89464 7.29289 7.70711C7.10536 7.51957 7 7.26522 7 7V4ZM4 8C3.73478 8 3.48043 7.89464 3.29289 7.70711C3.10536 7.51957 3 7.26522 3 7V4H5V7C5 7.26522 4.89464 7.51957 4.70711 7.70711C4.51957 7.89464 4.26522 8 4 8ZM14 20H10V16C10 15.4696 10.2107 14.9609 10.5858 14.5858C10.9609 14.2107 11.4696 14 12 14C12.5304 14 13.0391 14.2107 13.4142 14.5858C13.7893 14.9609 14 15.4696 14 16V20ZM19 20H16V16C16 14.9391 15.5786 13.9217 14.8284 13.1716C14.0783 12.4214 13.0609 12 12 12C10.9391 12 9.92172 12.4214 9.17157 13.1716C8.42143 13.9217 8 14.9391 8 16V20H5V9.82C5.36757 9.68356 5.70664 9.48012 6 9.22C6.55002 9.71196 7.26207 9.98393 8 9.98393C8.73793 9.98393 9.44998 9.71196 10 9.22C10.55 9.71196 11.2621 9.98393 12 9.98393C12.7379 9.98393 13.45 9.71196 14 9.22C14.55 9.71196 15.2621 9.98393 16 9.98393C16.7379 9.98393 17.45 9.71196 18 9.22C18.2934 9.48012 18.6324 9.68356 19 9.82V20ZM21 7C21 7.26522 20.8946 7.51957 20.7071 7.70711C20.5196 7.89464 20.2652 8 20 8C19.7348 8 19.4804 7.89464 19.2929 7.70711C19.1054 7.51957 19 7.26522 19 7V4H21V7Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Warehouse</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'orders' ? 'main-active' : '' }}" href="{{ route('orders.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 12.5V17.5C1 17.7652 1.10536 18.0196 1.29289 18.2071C1.48043 18.3946 1.73478 18.5 2 18.5H3C3 19.2956 3.31607 20.0587 3.87868 20.6213C4.44129 21.1839 5.20435 21.5 6 21.5C6.79565 21.5 7.55871 21.1839 8.12132 20.6213C8.68393 20.0587 9 19.2956 9 18.5H15C15 19.2956 15.3161 20.0587 15.8787 20.6213C16.4413 21.1839 17.2044 21.5 18 21.5C18.7956 21.5 19.5587 21.1839 20.1213 20.6213C20.6839 20.0587 21 19.2956 21 18.5H22C22.2652 18.5 22.5196 18.3946 22.7071 18.2071C22.8946 18.0196 23 17.7652 23 17.5V5.5C23 4.70435 22.6839 3.94129 22.1213 3.37868C21.5587 2.81607 20.7956 2.5 20 2.5H11C10.2044 2.5 9.44129 2.81607 8.87868 3.37868C8.31607 3.94129 8 4.70435 8 5.5V7.5H6C5.53426 7.5 5.07493 7.60844 4.65836 7.81672C4.24179 8.025 3.87944 8.32741 3.6 8.7L1.2 11.9C1.17075 11.9435 1.14722 11.9905 1.13 12.04L1.07 12.15C1.02587 12.2615 1.00216 12.3801 1 12.5ZM17 18.5C17 18.3022 17.0586 18.1089 17.1685 17.9444C17.2784 17.78 17.4346 17.6518 17.6173 17.5761C17.8 17.5004 18.0011 17.4806 18.1951 17.5192C18.3891 17.5578 18.5673 17.653 18.7071 17.7929C18.847 17.9327 18.9422 18.1109 18.9808 18.3049C19.0194 18.4989 18.9996 18.7 18.9239 18.8827C18.8482 19.0654 18.72 19.2216 18.5556 19.3315C18.3911 19.4414 18.1978 19.5 18 19.5C17.7348 19.5 17.4804 19.3946 17.2929 19.2071C17.1054 19.0196 17 18.7652 17 18.5ZM10 5.5C10 5.23478 10.1054 4.98043 10.2929 4.79289C10.4804 4.60536 10.7348 4.5 11 4.5H20C20.2652 4.5 20.5196 4.60536 20.7071 4.79289C20.8946 4.98043 21 5.23478 21 5.5V16.5H20.22C19.9388 16.1906 19.5961 15.9435 19.2138 15.7743C18.8315 15.6052 18.418 15.5178 18 15.5178C17.582 15.5178 17.1685 15.6052 16.7862 15.7743C16.4039 15.9435 16.0612 16.1906 15.78 16.5H10V5.5ZM8 11.5H4L5.2 9.9C5.29315 9.7758 5.41393 9.675 5.55279 9.60557C5.69164 9.53615 5.84475 9.5 6 9.5H8V11.5ZM5 18.5C5 18.3022 5.05865 18.1089 5.16853 17.9444C5.27841 17.78 5.43459 17.6518 5.61732 17.5761C5.80004 17.5004 6.00111 17.4806 6.19509 17.5192C6.38907 17.5578 6.56725 17.653 6.70711 17.7929C6.84696 17.9327 6.9422 18.1109 6.98079 18.3049C7.01937 18.4989 6.99957 18.7 6.92388 18.8827C6.84819 19.0654 6.72002 19.2216 6.55557 19.3315C6.39112 19.4414 6.19778 19.5 6 19.5C5.73478 19.5 5.48043 19.3946 5.29289 19.2071C5.10536 19.0196 5 18.7652 5 18.5ZM3 13.5H8V16.28C7.40983 15.7526 6.63513 15.4797 5.84469 15.5209C5.05425 15.5621 4.31212 15.914 3.78 16.5H3V13.5Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Orders</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) === 'customers' ? 'main-active' : '' }}" href="{{ route('customers.index') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.36 14.23C13.6915 14.769 12.8587 15.0629 12 15.0629C11.1413 15.0629 10.3085 14.769 9.64 14.23C9.43579 14.0603 9.17251 13.9786 8.90808 14.003C8.64365 14.0274 8.39974 14.1558 8.23 14.36C8.06027 14.5642 7.9786 14.8275 8.00298 15.0919C8.02736 15.3563 8.15579 15.6003 8.36 15.77C9.38134 16.6226 10.6696 17.0896 12 17.0896C13.3304 17.0896 14.6187 16.6226 15.64 15.77C15.8442 15.6003 15.9726 15.3563 15.997 15.0919C16.0214 14.8275 15.9397 14.5642 15.77 14.36C15.686 14.2589 15.5828 14.1753 15.4665 14.1141C15.3501 14.0528 15.2229 14.0151 15.0919 14.003C14.8275 13.9786 14.5642 14.0603 14.36 14.23ZM9 11C9.19779 11 9.39113 10.9414 9.55557 10.8315C9.72002 10.7216 9.8482 10.5654 9.92388 10.3827C9.99957 10.2 10.0194 9.99889 9.98079 9.80491C9.9422 9.61093 9.84696 9.43275 9.70711 9.29289C9.56726 9.15304 9.38908 9.0578 9.19509 9.01921C9.00111 8.98063 8.80005 9.00043 8.61732 9.07612C8.43459 9.15181 8.27842 9.27998 8.16853 9.44443C8.05865 9.60888 8 9.80222 8 10C8 10.2652 8.10536 10.5196 8.2929 10.7071C8.48043 10.8946 8.73479 11 9 11ZM15 9C14.8022 9 14.6089 9.05865 14.4444 9.16853C14.28 9.27841 14.1518 9.43459 14.0761 9.61732C14.0004 9.80004 13.9806 10.0011 14.0192 10.1951C14.0578 10.3891 14.153 10.5673 14.2929 10.7071C14.4328 10.847 14.6109 10.9422 14.8049 10.9808C14.9989 11.0194 15.2 10.9996 15.3827 10.9239C15.5654 10.8482 15.7216 10.72 15.8315 10.5556C15.9414 10.3911 16 10.1978 16 10C16 9.73478 15.8946 9.48043 15.7071 9.29289C15.5196 9.10536 15.2652 9 15 9ZM12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92894 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7363 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2ZM12 20C10.4178 20 8.87104 19.5308 7.55544 18.6518C6.23985 17.7727 5.21447 16.5233 4.60897 15.0615C4.00347 13.5997 3.84504 11.9911 4.15372 10.4393C4.4624 8.88743 5.22433 7.46197 6.34315 6.34315C7.46197 5.22433 8.88743 4.4624 10.4393 4.15372C11.9911 3.84504 13.5997 4.00346 15.0615 4.60896C16.5233 5.21447 17.7727 6.23984 18.6518 7.55544C19.5308 8.87103 20 10.4177 20 12C20 14.1217 19.1572 16.1566 17.6569 17.6569C16.1566 19.1571 14.1217 20 12 20Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Customers</span>
        </a>
    </li>
                
    <li class="nav-item ">
        <a class="nav-link {{ Request::segment(1) =='admins' ? 'main-active' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.3 12.22C12.8336 11.7581 13.2616 11.1869 13.5549 10.545C13.8482 9.90316 14 9.20571 14 8.5C14 7.17392 13.4732 5.90215 12.5355 4.96447C11.5979 4.02678 10.3261 3.5 9 3.5C7.67392 3.5 6.40215 4.02678 5.46447 4.96447C4.52678 5.90215 4 7.17392 4 8.5C3.99999 9.20571 4.1518 9.90316 4.44513 10.545C4.73845 11.1869 5.16642 11.7581 5.7 12.22C4.30014 12.8539 3.11247 13.8775 2.27898 15.1685C1.4455 16.4596 1.00147 17.9633 1 19.5C1 19.7652 1.10536 20.0196 1.29289 20.2071C1.48043 20.3946 1.73478 20.5 2 20.5C2.26522 20.5 2.51957 20.3946 2.70711 20.2071C2.89464 20.0196 3 19.7652 3 19.5C3 17.9087 3.63214 16.3826 4.75736 15.2574C5.88258 14.1321 7.4087 13.5 9 13.5C10.5913 13.5 12.1174 14.1321 13.2426 15.2574C14.3679 16.3826 15 17.9087 15 19.5C15 19.7652 15.1054 20.0196 15.2929 20.2071C15.4804 20.3946 15.7348 20.5 16 20.5C16.2652 20.5 16.5196 20.3946 16.7071 20.2071C16.8946 20.0196 17 19.7652 17 19.5C16.9985 17.9633 16.5545 16.4596 15.721 15.1685C14.8875 13.8775 13.6999 12.8539 12.3 12.22ZM9 11.5C8.40666 11.5 7.82664 11.3241 7.33329 10.9944C6.83994 10.6648 6.45542 10.1962 6.22836 9.64805C6.0013 9.09987 5.94189 8.49667 6.05764 7.91473C6.1734 7.33279 6.45912 6.79824 6.87868 6.37868C7.29824 5.95912 7.83279 5.6734 8.41473 5.55764C8.99667 5.44189 9.59987 5.5013 10.1481 5.72836C10.6962 5.95542 11.1648 6.33994 11.4944 6.83329C11.8241 7.32664 12 7.90666 12 8.5C12 9.29565 11.6839 10.0587 11.1213 10.6213C10.5587 11.1839 9.79565 11.5 9 11.5ZM18.74 11.82C19.38 11.0993 19.798 10.2091 19.9438 9.25634C20.0896 8.30362 19.9569 7.32907 19.5618 6.45C19.1666 5.57093 18.5258 4.8248 17.7165 4.30142C16.9071 3.77805 15.9638 3.49974 15 3.5C14.7348 3.5 14.4804 3.60536 14.2929 3.79289C14.1054 3.98043 14 4.23478 14 4.5C14 4.76522 14.1054 5.01957 14.2929 5.20711C14.4804 5.39464 14.7348 5.5 15 5.5C15.7956 5.5 16.5587 5.81607 17.1213 6.37868C17.6839 6.94129 18 7.70435 18 8.5C17.9986 9.02524 17.8593 9.5409 17.5961 9.99542C17.3328 10.4499 16.9549 10.8274 16.5 11.09C16.3517 11.1755 16.2279 11.2977 16.1404 11.4447C16.0528 11.5918 16.0045 11.7589 16 11.93C15.9958 12.0998 16.0349 12.2678 16.1137 12.4183C16.1924 12.5687 16.3081 12.6967 16.45 12.79L16.84 13.05L16.97 13.12C18.1754 13.6917 19.1923 14.596 19.901 15.7263C20.6096 16.8566 20.9805 18.1659 20.97 19.5C20.97 19.7652 21.0754 20.0196 21.2629 20.2071C21.4504 20.3946 21.7048 20.5 21.97 20.5C22.2352 20.5 22.4896 20.3946 22.6771 20.2071C22.8646 20.0196 22.97 19.7652 22.97 19.5C22.9782 17.9654 22.5938 16.4543 21.8535 15.1101C21.1131 13.7659 20.0413 12.6333 18.74 11.82Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Users & Roles</span>
        </a>
        <div id="collapse2" class="collapse {{ Request::segment(2) =='admin-users' ? 'show' : '' }}" aria-labelledby="heading2" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item side-menu-fw {{ Request::segment(2) =='admin-users' ? 'active': '' }}" href="{{ route('admin-users.index') }}">Dashboard Users</a>
                <a class="collapse-item side-menu-fw" href="#">Roles</a>
            </div>
        </div>
    </li>
                    
    <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.9 12.66C19.7397 12.4775 19.6513 12.2429 19.6513 12C19.6513 11.7571 19.7397 11.5225 19.9 11.34L21.18 9.90002C21.3211 9.74269 21.4087 9.54472 21.4302 9.33452C21.4518 9.12433 21.4062 8.9127 21.3 8.73002L19.3 5.27002C19.1949 5.08754 19.0349 4.94289 18.8428 4.8567C18.6506 4.77051 18.4362 4.74718 18.23 4.79002L16.35 5.17002C16.1108 5.21945 15.8618 5.17961 15.6499 5.05802C15.438 4.93643 15.278 4.7415 15.2 4.51002L14.59 2.68002C14.5229 2.4814 14.3951 2.30888 14.2246 2.18686C14.0542 2.06484 13.8497 1.99948 13.64 2.00002H9.64002C9.42195 1.98864 9.20615 2.04894 9.02558 2.17173C8.84501 2.29452 8.7096 2.47304 8.64002 2.68002L8.08002 4.51002C8.00202 4.7415 7.84199 4.93643 7.63013 5.05802C7.41827 5.17961 7.16924 5.21945 6.93002 5.17002L5.00002 4.79002C4.80457 4.7624 4.60532 4.79324 4.42737 4.87866C4.24941 4.96407 4.10072 5.10025 4.00002 5.27002L2.00002 8.73002C1.89118 8.91067 1.84224 9.1211 1.8602 9.33124C1.87816 9.54138 1.9621 9.74046 2.10002 9.90002L3.37002 11.34C3.53034 11.5225 3.61875 11.7571 3.61875 12C3.61875 12.2429 3.53034 12.4775 3.37002 12.66L2.10002 14.1C1.9621 14.2596 1.87816 14.4587 1.8602 14.6688C1.84224 14.8789 1.89118 15.0894 2.00002 15.27L4.00002 18.73C4.10512 18.9125 4.26514 19.0571 4.45727 19.1433C4.6494 19.2295 4.86384 19.2529 5.07002 19.21L6.95002 18.83C7.18924 18.7806 7.43827 18.8204 7.65013 18.942C7.86199 19.0636 8.02202 19.2585 8.10002 19.49L8.71002 21.32C8.7796 21.527 8.91501 21.7055 9.09558 21.8283C9.27615 21.9511 9.49195 22.0114 9.71002 22H13.71C13.9197 22.0006 14.1242 21.9352 14.2946 21.8132C14.4651 21.6912 14.5929 21.5186 14.66 21.32L15.27 19.49C15.348 19.2585 15.508 19.0636 15.7199 18.942C15.9318 18.8204 16.1808 18.7806 16.42 18.83L18.3 19.21C18.5062 19.2529 18.7206 19.2295 18.9128 19.1433C19.1049 19.0571 19.2649 18.9125 19.37 18.73L21.37 15.27C21.4762 15.0873 21.5218 14.8757 21.5002 14.6655C21.4787 14.4553 21.3911 14.2573 21.25 14.1L19.9 12.66ZM18.41 14L19.21 14.9L17.93 17.12L16.75 16.88C16.0298 16.7328 15.2806 16.8551 14.6446 17.2238C14.0086 17.5925 13.5302 18.1819 13.3 18.88L12.92 20H10.36L10 18.86C9.76987 18.1619 9.2914 17.5725 8.65542 17.2038C8.01945 16.8351 7.27024 16.7128 6.55002 16.86L5.37002 17.1L4.07002 14.89L4.87002 13.99C5.36197 13.44 5.63395 12.7279 5.63395 11.99C5.63395 11.2521 5.36197 10.54 4.87002 9.99002L4.07002 9.09002L5.35002 6.89002L6.53002 7.13002C7.25024 7.27724 7.99945 7.1549 8.63542 6.78622C9.2714 6.41753 9.74987 5.82818 9.98002 5.13002L10.36 4.00002H12.92L13.3 5.14002C13.5302 5.83818 14.0086 6.42753 14.6446 6.79622C15.2806 7.1649 16.0298 7.28724 16.75 7.14002L17.93 6.90002L19.21 9.12002L18.41 10.02C17.9236 10.5688 17.655 11.2767 17.655 12.01C17.655 12.7433 17.9236 13.4513 18.41 14ZM11.64 8.00002C10.8489 8.00002 10.0755 8.23461 9.41774 8.67414C8.75994 9.11366 8.24725 9.73838 7.9445 10.4693C7.64175 11.2002 7.56254 12.0045 7.71688 12.7804C7.87122 13.5563 8.25218 14.269 8.81159 14.8284C9.371 15.3879 10.0837 15.7688 10.8597 15.9232C11.6356 16.0775 12.4398 15.9983 13.1708 15.6955C13.9017 15.3928 14.5264 14.8801 14.9659 14.2223C15.4054 13.5645 15.64 12.7911 15.64 12C15.64 10.9392 15.2186 9.92174 14.4684 9.17159C13.7183 8.42144 12.7009 8.00002 11.64 8.00002ZM11.64 14C11.2445 14 10.8578 13.8827 10.5289 13.663C10.2 13.4432 9.94363 13.1308 9.79226 12.7654C9.64088 12.3999 9.60128 11.9978 9.67845 11.6098C9.75562 11.2219 9.9461 10.8655 10.2258 10.5858C10.5055 10.3061 10.8619 10.1156 11.2498 10.0384C11.6378 9.96128 12.0399 10.0009 12.4054 10.1523C12.7708 10.3036 13.0832 10.56 13.303 10.8889C13.5227 11.2178 13.64 11.6045 13.64 12C13.64 12.5304 13.4293 13.0392 13.0542 13.4142C12.6792 13.7893 12.1705 14 11.64 14Z" fill="black"/>
            </svg>
            <span class="side-menu-fw">Global Settings</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item side-menu-fw" style="" href="#">Country</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Currency</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Occasions</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Languge</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Api Errors</a>
                <a class="collapse-item side-menu-fw" style="" href="#">System Pages</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Batlaat Program</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Batlaat Info</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Payment Method</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Delivery Cost</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Template Email</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Template SMS</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Wallet Amount</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Redeem Accounts</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Account Deletion</a>
                <a class="collapse-item side-menu-fw" style="" href="#">FAQs</a>
                <a class="collapse-item side-menu-fw" style="" href="#">Terms & Condition</a>
            </div>
        </div>
    </li>
                    
    <li class="nav-item">
        <a class="nav-link" href="#" style="">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 17L21 12L16 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21 12H9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="side-menu-fw">Logout</span>
        </a>
    </li>
</ul>