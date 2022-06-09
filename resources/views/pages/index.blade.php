@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{ __('seo.index-title') }} @endslot
        @slot('description') {{ __('seo.index-desc') }} @endslot
        @slot('image') /meta/index.png @endslot
        @slot('date') @endslot

    @endcomponent
@endsection

@section('main')

    <header class="header-section shadow-custom-1 relative z-30">
        <div class="hidden sm:flex bg-secondary-color">
            <div class="grid grid-cols-12 container mx-auto px-2 xs:px-8 py-[6px] h-full">
                <div class="col-span-8 self-center">
                    <div class="flex gap-[15px]">
                        <div class="flex items-center gap-2">
                            <i class="bi bi-envelope text-2xl text-primary-color flex"></i>
                            <a href="#" class="text-white font-light">store@example.com</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="bi bi-telephone text-xl text-primary-color flex"></i>
                            <a href="#" class="text-white font-light">0101-010101</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-4 justify-self-end self-center">
                    <div class="flex items-center gap-[10px]">
                        <a href="#">
                            <i class="bi bi-instagram flex text-icon hover:text-white transition-all duration-300"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-facebook flex text-icon hover:text-white transition-all duration-300"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-twitter flex text-icon hover:text-white transition-all duration-300"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-youtube flex text-icon hover:text-white transition-all duration-300"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-secondary-color">
            <div class="container mx-auto px-2 xs:px-8 py-5 h-full grid grid-cols-4 lg:grid-cols-12 gap-1 lg:gap-0">
                <div class="col-span-2 lg:col-span-3 order-1 lg:order-1 self-center">
                    <a href="index.html">
                        <img class="inline" src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="header-search hidden lg:block col-span-4 lg:col-span-6 order-3 lg:order-2 self-center mt-[10px] lg:mt-0 transition-all duration-300">
                    <form class="search" action="#">
                        <div class="flex overflow-hidden h-[40px] rounded-[50px] bg-primary-rgba">
                            <input class="search bg-transparent w-full border-none focus:ring-0 focus:ring-transparent focus:border-none py-[5px] pl-5 text-white placeholder-icon" type="search" placeholder="Search..." spellcheck="false" data-ms-editor="true">
                            <button class="btn-search text-white px-3" type="submit">
                                <i class="bi bi-search text-xl flex"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-span-2 lg:col-span-3 order-2 lg:order-3 justify-self-end self-center flex gap-2 xl:gap-[50px]">
                    <div class="flex items-center lg:hidden">
                        <button class="btn-search-mob text-white p-[5px]">
                            <i class="bi bi-search flex text-2xl pointer-events-none"></i>
                        </button>
                    </div>
                    <div class="flex items-center lg:hidden">
                        <button class="btn-open-modal text-white" data-target=".menu-mob">
                            <i class="bi bi-list flex text-3xl pointer-events-none"></i>
                        </button>
                    </div>
                    <div class="group-items text-white items-center gap-5 hidden lg:flex">
                        <div class="relative">
                            <a class="btn-open-modal" data-target=".wishlist-modal" href="javascript:void(0)">
                                <i class="bi bi-heart text-white text-[32px] transform translate-y-1 flex pointer-events-none"></i>
                            </a>
                            <span class="badge absolute top-0 right-[-6px] h-[15px] min-w-[15px] px-[2px]">0</span>
                        </div>
                        <div class="relative">
                            <a class="btn-open-modal" data-target=".shopping-cart-modal" href="javascript:void(0)">
                                <i class="bi bi-cart2 text-white text-[35px] flex pointer-events-none"></i>
                            </a>
                            <span class="badge absolute top-0 right-[-6px] h-[15px] min-w-[15px] px-[2px]">0</span>
                        </div>
                    </div>
                    <div class="hidden lg:flex relative group">
                        <div class="flex items-center gap-1 cursor-pointer select-none">
                            <span class="font-semibold text-white">My account</span>
                            <i class="bi bi-caret-down-fill text-white text-sm flex rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
                        </div>
                        <div class="absolute top-full z-30 w-[120%] invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300 pt-[10px]">
                            <div class="relative arrow">
                                <ul class="bg-white shadow-custom-1 rounded-md overflow-hidden p-[6px]">
                                    <li class="hover:font-semibold">
                                        <a href="#" class="btn-open-modal" data-tab="0" data-target=".entry-modal">
                                            <div class="flex items-center gap-2 p-1 pointer-events-none">
                                                <i class="bi bi-box-arrow-in-right text-xl text-primary-color flex"></i>
                                                <span>Login</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover:font-semibold">
                                        <a href="#" class="btn-open-modal" data-tab="1" data-target=".entry-modal">
                                            <div class="flex items-center gap-2 p-1 pointer-events-none">
                                                <i class="bi bi-person text-xl text-primary-color flex"></i>
                                                <span>Sign up</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white hidden lg:block">
            <nav class="container mx-auto px-2 xs:px-8">
                <ul class="menu flex flex-wrap justify-between items-center text-lg py-[10px]">
                    <li class="group relative underlined-animated">
                        <a href="#" class="btn-open font-semibold flex items-center gap-1">
                            <span>Products</span>
                            <i class="bi bi-caret-down-fill flex text-xs text-primary-color rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
                        </a>
                        <div class="submenu absolute pt-[10px] left-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300">
                            <ul class="bg-white shadow-custom-1 text-base w-[250px] relative">
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Pc components</span>
                                        <i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
                                    </a>
                                    <div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
                                        <div class="bg-white shadow-custom-2">
                                            <div class="border-b-2 border-primary-color py-[10px]">
                                                <span class="uppercase text-primary-color font-bold text-3xl px-5">Pc components</span>
                                            </div>
                                            <div class="submenu-categories flex flex-wrap">
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/motherboards.jpg" alt="motherboard">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Motherboards</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/processors.jpg" alt="processors">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Processors</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/rams.jpg" alt="rams">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">RAMS</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/video_cards.jpg" alt="video cards">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Video Cards</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/power_supplys.jpg" alt="video cards">
                                                        </div>
                                                        <span class="block text-center object-contain group-2-hover-font">Power Supplys</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/hard_drives.jpg" alt="video cards">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Hard Drives</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/ssd_disk.jpg" alt="video cards">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">SSD Disk</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/pc_components/computer_case.jpg" alt="video cards">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Case</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Peripherals</span>
                                        <i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
                                    </a>
                                    <div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
                                        <div class="bg-white shadow-custom-2">
                                            <div class="border-b-2 border-primary-color py-[10px]">
                                                <span class="uppercase text-primary-color font-bold text-3xl px-5">Peripherals</span>
                                            </div>
                                            <div class="submenu-categories flex flex-wrap">
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/peripherals/keywords.jpg" alt="motherboard">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Keywords</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/peripherals/mouse.jpg" alt="processors">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Mouses</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/peripherals/mic.jpg" alt="rams">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Mics</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/peripherals/webcam.jpg" alt="rams">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Webcam</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Computers</span>
                                        <i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
                                    </a>
                                    <div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
                                        <div class="bg-white shadow-custom-2">
                                            <div class="border-b-2 border-primary-color py-[10px]">
                                                <span class="uppercase text-primary-color font-bold text-3xl px-5">Computers</span>
                                            </div>
                                            <div class="submenu-categories flex flex-wrap">
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/computers/desktops.jpg" alt="motherboard">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Desktops</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/computers/notebooks.jpg" alt="processors">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Notebooks</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Monitors</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Printers</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Gaming</span>
                                        <i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
                                    </a>
                                    <div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
                                        <div class="bg-white shadow-custom-2">
                                            <div class="border-b-2 border-primary-color py-[10px]">
                                                <span class="uppercase text-primary-color font-bold text-3xl px-5">Gaming</span>
                                            </div>
                                            <div class="submenu-categories flex flex-wrap">
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/gaming/consoles.jpg" alt="motherboard">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Consoles</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/gaming/games.jpg" alt="processors">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Games</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/gaming/accessories.jpg" alt="processors">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Accessories</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Tablets</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Smartphones</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="#" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Software</span>
                                        <i class="bi bi-caret-right-fill flex text-xs text-primary-color ml-auto invisible group-1-hover-visible"></i>
                                    </a>
                                    <div class="submenu absolute top-0 left-full min-h-full min-w-[680px] invisible opacity-0 group-1-hover-visible transition-all duration-300">
                                        <div class="bg-white shadow-custom-2">
                                            <div class="border-b-2 border-primary-color py-[10px]">
                                                <span class="uppercase text-primary-color font-bold text-3xl px-5">Software</span>
                                            </div>
                                            <div class="submenu-categories flex flex-wrap">
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/software/os.jpg" alt="motherboard">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Operating System</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/software/office.jpg" alt="processors">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Office Package</span>
                                                    </a>
                                                </div>
                                                <div class="p-[10px] group-2">
                                                    <a class="categorie-container inline-block" href="#">
                                                        <div class="categorie-img h-[150px] w-[150px]">
                                                            <img class="img-product group-2-hover-img" src="img/categories/software/antivirus.jpg" alt="processors">
                                                        </div>
                                                        <span class="block text-center group-2-hover-font">Antivirus</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="underlined-animated"><a href="index.html">Home</a></li>
                    <li class="underlined-animated"><a href="#">Desktops</a></li>
                    <li class="underlined-animated"><a href="#">Notebooks</a></li>
                    <li class="underlined-animated"><a href="#">Smartphones</a></li>
                    <li class="underlined-animated group">
                        <a href="#" class="flex items-center gap-1">
                            <span>Pages</span>
                            <i class="bi bi-caret-down-fill flex text-xs text-primary-color rotate-0 group-hover:rotate-180 transition-all duration-300"></i>
                        </a>
                        <div class="absolute pt-[10px] left-0 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300">
                            <ul class="bg-white shadow-custom-1 text-base w-[250px] relative">
                                <li class="group-1">
                                    <a href="wishlist.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Wishlist</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="shopping-cart.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Shopping Cart</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="product-details.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Product Details</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="checkout.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Checkout</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="shop-mixed.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Shop - Mixed</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="shop-listed.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Shop - Listed</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="shop-grid.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Shop - Grid</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="login.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Login</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="sign-up.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Sign Up</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="error404.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Error 404</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="purchase-completed.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Purchase Completed</span>
                                    </a>
                                </li>
                                <li class="group-1">
                                    <a href="purchase-failed.html" class="flex gap-2 items-center p-2">
                                        <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-1-hover-visible"></i>
                                        <span class="group-1-hover-font">Purchase Failed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="underlined-animated"><a href="faqs.html">FAQ's</a></li>
                    <li class="underlined-animated"><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="banners-section container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="swiper-container col-span-12 md:col-span-8 rounded-lg overflow-hidden">
                <div class="swiper swiper-banner group relative flex items-center swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                    <div class="swiper-wrapper max-h-[377px]" id="swiper-wrapper-ea6c363f1db7e111" aria-live="off" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 633px; transition-duration: 0ms; opacity: 0; transform: translate3d(0px, 0px, 0px);">
                            <img src="./img/banner/banner-3.jpg" alt="banner 3">
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 633px; transition-duration: 0ms; opacity: 0; transform: translate3d(-633px, 0px, 0px);">
                            <img src="./img/banner/banner-1.jpg" alt="banner 1">
                        </div>
                        <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 633px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1266px, 0px, 0px);">
                            <img src="./img/banner/banner-2.jpg" alt="banner 2">
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 633px; transition-duration: 0ms; opacity: 0; transform: translate3d(-1899px, 0px, 0px);">
                            <img src="./img/banner/banner-3.jpg" alt="banner 3">
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 633px; transition-duration: 0ms; opacity: 0; transform: translate3d(-2532px, 0px, 0px);">
                            <img src="./img/banner/banner-1.jpg" alt="banner 1">
                        </div></div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ea6c363f1db7e111">❯</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ea6c363f1db7e111">❮</div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
            <div class="hidden md:block col-span-4 rounded-lg overflow-hidden relative group">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="img/categories/sec-desktop-g.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Armed pc gamer</h3>
                        <p class="text-white my-5 drop-shadow-md">Choose your pc and play!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Shop now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="information-section container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-truck text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Free shipping</h6>
                        <p class="text-sm text-gray-400 break-all">Orders over $100</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-cash-coin text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Money back</h6>
                        <p class="text-sm text-gray-400 break-all">With a 30 day</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-shield-check text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Secure payment</h6>
                        <p class="text-sm text-gray-400 break-all">Secured payment</p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 flex">
                <div class="flex items-center w-full gap-4 p-5 xs:pl-[20%] sm:pl-5 rounded-lg bg-white hover:shadow-lg transition-all duration-300">
                    <div class="rounded-full border-2">
                        <i class="bi bi-headset text-primary-color text-[40px] p-3 flex"></i>
                    </div>
                    <div>
                        <h6 class="font-bold capitalize">Online support</h6>
                        <p class="text-sm text-gray-400 break-all">Support 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offers-section container mx-auto px-2 xs:px-8 my-5">
        <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mt-5">
            <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Offers</h1>
        </div>
        <div class="swiper-container">
            <div class="swiper swiper-cards group relative flex items-center py-5 swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode">
                <div class="swiper-wrapper" id="swiper-wrapper-4328dc0810c7cb5c9" aria-live="off" style="transform: translate3d(-1960px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="3 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="2">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/categories/pc_components/processors.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Ryzen 5 3600x
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="4 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="3">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/categories/peripherals/mouse.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Mouse Logitech g403
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="5 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="4">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_1.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Moto e7i Power
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="0">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_1.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Apple Macbook Aire 13
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="2 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="1">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/categories/gaming/consoles.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        PlayStation 5
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="2">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/categories/pc_components/processors.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Ryzen 5 3600x
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="3">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/categories/peripherals/mouse.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Mouse Logitech g403
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="5 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="4">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_1.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Moto e7i Power
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="0">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_1.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Apple Macbook Aire 13
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="2 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="1">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/categories/gaming/consoles.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        PlayStation 5
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="3 / 5" style="width: 306.667px; margin-right: 20px;" data-swiper-slide-index="2">
                        <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                            <div class="absolute top-[10px] right-[10px]">
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                        <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                                <div class="p-[2px]">
                                    <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                        <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-color rounded-br-lg flex justify-center items-center">
                                <span class="text-white text-md text-center font-semibold uppercase"> 25% Off</span>
                            </div>
                            <div class="h-[190px] overflow-hidden rounded-lg">
                                <a href="#">
                                    <img class="card-object-fit w-full h-full" src="img/categories/pc_components/processors.jpg" alt="product">
                                </a>
                            </div>
                            <div>
                                <div class="my-2 flex justify-between">
                                    <div class="flex">
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base text-star flex"></i>
                                        <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                    </div>
                                    <div>
                                        <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <a class="clamp font-medium break-all" href="#">
                                        Ryzen 5 3600x
                                    </a>
                                </div>
                                <div class="my-1">
                                    <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                        dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                        tempora voluptas, dolores ipsam ad!</p>
                                </div>
                                <div class="flex gap-2 my-2">
                                    <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                    <div class="block h-3 w-3 bg-black rounded-full"></div>
                                </div>
                                <div class="my-1">
                                    <span class="text-lg font-bold">$37.00</span>
                                    <span class="text-sm text-primary-color line-through">$50.00</span>
                                </div>
                                <div>
                                    <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                        <span class="font-bold uppercase text-white">View details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div></div>
                <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-4328dc0810c7cb5c9">❯</div>
                <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-4328dc0810c7cb5c9">❮</div>
                <div class="swiper-pagination"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </div>

    <div class="banners-section-2 container mx-auto px-2 xs:px-8 my-5">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 sm:col-span-6 rounded-lg overflow-hidden relative group h-[300px]">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="img/categories/sec-notebooks.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Notebooks</h3>
                        <p class="text-white my-5 drop-shadow-md">Choose the ideal laptop for you!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Show more</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 rounded-lg overflow-hidden relative group h-[300px]">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="img/categories/sec-desktops.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Desktops</h3>
                        <p class="text-white my-5 drop-shadow-md">Build your PC at the best price!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products-1-section container mx-auto px-2 xs:px-8 my-5">
        <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mt-5">
            <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Notebooks</h1>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-3 rounded-l-lg relative group overflow-hidden hidden xl:block my-5">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="img/categories/sliders/notebooks.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Notebooks</h3>
                        <p class="text-white my-5 drop-shadow-md">Choose your laptop now!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Show more</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-9 cards-slider-2 swiper-container">
                <div class="swiper swiper-cards-2 group relative flex items-center py-5 swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-41d52d99dd10faa4a" aria-live="off" style="transform: translate3d(-1633.33px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_2.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Asus ZenBook 14
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_3.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Lenovo V15
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_4.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            HP 255 G7
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_1.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Apple Macbook Air 13
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_2.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Asus ZenBook 14
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_3.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Lenovo V15
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_4.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            HP 255 G7
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_1.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Apple Macbook Air 13
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_2.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Asus ZenBook 14
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/notebooks/note_3.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Lenovo V15
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-41d52d99dd10faa4a">❯</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-41d52d99dd10faa4a">❮</div>
                    <div class="swiper-pagination"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>

    <div class="products-2-section container mx-auto px-2 xs:px-8 my-5">
        <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mt-5">
            <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Smartphones</h1>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-3 rounded-l-lg relative group overflow-hidden hidden xl:block my-5">
                <div class="overlay-gradient absolute h-full w-full z-[1]"></div>
                <img class="w-full h-full object-cover transition-all duration-300 hover:transform group-hover:scale-110" src="img/categories/sliders/smartphones.jpg" alt="banner-img">
                <div class="absolute top-0 left-0 flex items-center h-full w-full">
                    <div class="p-5 z-[2]">
                        <h3 class="uppercase text-lg font-bold text-primary-color drop-shadow-xl">Smartphones</h3>
                        <p class="text-white my-5 drop-shadow-md">Choose your smartphone now!</p>
                        <a class="btn-effect inline-block text-white bg-primary-color rounded-lg py-2 px-3" href="#">
                            <span>Show more</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-9 cards-slider-2 swiper-container">
                <div class="swiper swiper-cards-2 group relative flex items-center py-5 swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-c538b4b810104510d03" aria-live="off" style="transform: translate3d(-1960px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_2.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            iPhone 12 Mini
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_3.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Samsung A12
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_4.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Nokia 5.4
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_1.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Moto e7i Power
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_2.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            iPhone 12 Mini
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_3.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Samsung A12
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_4.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Nokia 5.4
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_1.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Moto e7i Power
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_2.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            iPhone 12 Mini
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 306.667px; margin-right: 20px;">
                            <div class="card-container p-5 bg-white rounded-lg shadow-md hover:shadow-xl relative transition-all duration-300 hover:z-[2] translateY-2 overflow-hidden">
                                <div class="absolute top-[10px] right-[10px]">
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-wishlist btn-wishlist flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                    <div class="p-[2px]">
                                        <a class="tippy tippy-left-card-view btn-open-modal flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] hover:bg-primary-hover rounded-lg transition-all duration-300 cursor-pointer" href="javascript:void(0)" data-target=".quick-view-modal">
                                            <i class="bi bi-eye text-xl text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="h-[190px] overflow-hidden rounded-lg">
                                    <a href="#">
                                        <img class="card-object-fit w-full h-full" src="img/cards/phones/phone_3.jpg" alt="product">
                                    </a>
                                </div>
                                <div>
                                    <div class="my-2 flex justify-between">
                                        <div class="flex">
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base text-star flex"></i>
                                            <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                        </div>
                                        <div>
                                            <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                        </div>
                                    </div>
                                    <div class="my-1">
                                        <a class="clamp font-medium break-all" href="#">
                                            Samsung A12
                                        </a>
                                    </div>
                                    <div class="my-1">
                                        <p class="text-sm clamp-2 text-gray-400">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Itaque culpa, odio, qui praesentium dignissimos eaque
                                            dolorum porro alias neque, eius animi ipsa voluptates. Optio repellat
                                            tempora voluptas, dolores ipsam ad!</p>
                                    </div>
                                    <div class="flex gap-2 my-2">
                                        <div class="block h-3 w-3 bg-blue-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-red-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-yellow-600 rounded-full"></div>
                                        <div class="block h-3 w-3 bg-black rounded-full"></div>
                                    </div>
                                    <div class="my-1">
                                        <span class="text-lg font-bold">$37.00</span>
                                    </div>
                                    <div>
                                        <a class="btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="#">
                                            <span class="font-bold uppercase text-white">View details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                    <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c538b4b810104510d03">❯</div>
                    <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c538b4b810104510d03">❮</div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>

    <div class="categories-section container mx-auto px-2 xs:px-8 my-5">
        <div class="liner-container flex justify-center border-b-2 border-[rgba(119,119,119,.17)] mb-5">
            <h1 class="uppercase text-2xl font-bold inline-block border-b-2 border-primary-color mb-[-2px] pb-3">Categories</h1>
        </div>
        <div class="swiper-container col-span-12 md:col-span-8 rounded-lg overflow-hidden">
            <div class="swiper swiper-default group relative flex items-center py-5 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-6e0393a4ee2bced8" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-990px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 960px; margin-right: 30px;">
                        <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-mouse-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Mouses</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-keyboard-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Keyboards</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-printer-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Printers</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-laptop text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Notebooks</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-phone-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Phones</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-tablet-landscape-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Tablets</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-display text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Monitors</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-usb-drive-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Pendrives</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 960px; margin-right: 30px;">
                        <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-gpu-card text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Video Cards</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-plug-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Power Supplies</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-motherboard-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Motherboard</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-cpu-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Processors</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-memory text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Memory Ram</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-device-hdd-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Hard Drives</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-device-ssd-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">SSD</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-pc text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Cases</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 960px; margin-right: 30px;">
                        <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-mouse-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Mouses</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-keyboard-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Keyboards</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-printer-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Printers</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-laptop text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Notebooks</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-phone-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Phones</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-tablet-landscape-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Tablets</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-display text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Monitors</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-usb-drive-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Pendrives</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 960px; margin-right: 30px;">
                        <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-gpu-card text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Video Cards</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-plug-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Power Supplies</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-motherboard-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Motherboard</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-cpu-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Processors</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-memory text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Memory Ram</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-device-hdd-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Hard Drives</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-device-ssd-fill text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">SSD</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-span-3 flex border">
                                <a class="flex justify-center bg-white w-full p-5 hover:relative hover:z-[2] hover:shadow-xl transition-all duration-300" href="#">
                                    <div>
                                        <i class="bi bi-pc text-[40px] text-primary-color flex justify-center mb-2"></i>
                                        <span class="text-gray-40">Cases</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div></div>
                <div class="swiper-pagination top-[-5px] bottom-[unset!important] text-right swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </div>

    <div class="brands-section container mx-auto px-2 xs:px-8 my-5">
        <div class="swiper swiper-brands group relative flex items-center swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode">
            <div class="swiper-wrapper flex items-center select-none" id="swiper-wrapper-56bc4c8116e16b69" aria-live="off" style="transform: translate3d(-1680px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="9" role="group" aria-label="10 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/lenovo-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="10" role="group" aria-label="11 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/logitech-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="11" role="group" aria-label="12 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/msi-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="12" role="group" aria-label="13 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/nvidia-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="13" role="group" aria-label="14 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/philips-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="14" role="group" aria-label="15 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/redragon-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="15" role="group" aria-label="16 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/samsung-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/amd-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/asrock-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/asus-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/corsair-logo.png" alt="logo">
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="4" role="group" aria-label="5 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/genius-logo.png" alt="logo">
                </div>
                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="5" role="group" aria-label="6 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/gigabyte-logo.png" alt="logo">
                </div>
                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="6" role="group" aria-label="7 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/hp-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="7" role="group" aria-label="8 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/intel-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="8" role="group" aria-label="9 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/kingston-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="9" role="group" aria-label="10 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/lenovo-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="10" role="group" aria-label="11 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/logitech-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="11" role="group" aria-label="12 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/msi-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="12" role="group" aria-label="13 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/nvidia-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="13" role="group" aria-label="14 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/philips-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="14" role="group" aria-label="15 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/redragon-logo.png" alt="logo">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="15" role="group" aria-label="16 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/samsung-logo.png" alt="logo">
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/amd-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/asrock-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/asus-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/corsair-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="4" role="group" aria-label="5 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/genius-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="5" role="group" aria-label="6 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/gigabyte-logo.png" alt="logo">
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="6" role="group" aria-label="7 / 16" style="width: 120px; margin-right: 20px;">
                    <img class="object-contain filter grayscale hover:filter-none transition-all duration-300" src="img/brands/hp-logo.png" alt="logo">
                </div></div>
            <div class="button-next btn-slider-2 -right-16 transition-all duration-300 group-hover:right-4 hover:text-primary-color" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-56bc4c8116e16b69">❯</div>
            <div class="button-prev btn-slider-2 -left-16 transition-all duration-300 group-hover:left-4 hover:text-primary-color" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-56bc4c8116e16b69">❮</div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>

    <!-- Modals -->
    <div class="menu-mob modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
        <div class="flex h-full w-full">
            <div class="modal-content relative bg-white h-full w-[288px] min-w-[250px] left-[-999px] mr-auto transition-all duration-300 flex flex-col">
                <div class="bg-secondary-color w-full">
                    <button class="btn-close-modal absolute top-5 right-5 p-[3px] text-white transition-all duration-300">
                        <i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
                    </button>
                    <div class="py-12">
                        <img src="img/logo.png" class="h-[40px] mx-auto" alt="logo">
                    </div>
                </div>
                <nav class="bg-white h-full w-full overflow-auto">
                    <ul class="metismenu">
                        <li class="border-b border-gray-200">
                            <a class="flex items-center p-2 select-none" href="index.html">
                                <i class="bi bi-house-door flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Home</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
                                <i class="bi bi-person flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">My Account</span>
                            </div>
                            <div class="metismenu-content mm-collapse">
                                <a class="btn-open-modal block ml-10 p-1" href="#" data-tab="0" data-target=".entry-modal">Login</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#" data-tab="1" data-target=".entry-modal">Sign Up</a>
                            </div>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="btn-open-modal p-2" data-target=".wishlist-modal">
                                <div class="flex items-center cursor-pointer select-none pointer-events-none">
                                    <i class="bi bi-heart flex text-xl text-primary-color mr-3"></i>
                                    <span class="font-semibold">Wishlist</span>
                                    <span class="badge h-[22px] min-w-[22px] px-[6px] ml-auto">0</span>
                                </div>
                            </div>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="btn-open-modal p-2" data-target=".shopping-cart-modal">
                                <div class="flex items-center cursor-pointer select-none pointer-events-none">
                                    <i class="bi bi-cart flex text-xl text-primary-color mr-3"></i>
                                    <span class="font-semibold">Shopping Cart</span>
                                    <span class="badge h-[22px] min-w-[22px] px-[6px] ml-auto">0</span>
                                </div>
                            </div>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
                                <i class="bi bi-motherboard flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Hardware</span>
                            </div>
                            <div class="metismenu-content mm-collapse">
                                <a class="btn-open-modal block ml-10 p-1" href="#">Motherboards</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Processors</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Rams</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Video Cards</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Power Supplys</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Hard Drives</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">SSD Disk</a>
                            </div>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
                                <i class="bi bi-mouse flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Peripherals</span>
                            </div>
                            <div class="metismenu-content mm-collapse">
                                <a class="btn-open-modal block ml-10 p-1" href="#">Keywords</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Mouses</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Mics</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Webcam</a>
                            </div>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
                                <i class="bi bi-pc-display flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Computers</span>
                            </div>
                            <div class="metismenu-content mm-collapse">
                                <a class="btn-open-modal block ml-10 p-1" href="#">Notebooks</a>
                                <a class="btn-open-modal block ml-10 p-1" href="#">Desktops</a>
                            </div>
                        </li>
                        <li class="border-b border-gray-200">
                            <a class="p-2 flex items-center cursor-pointer select-none" href="#">
                                <i class="bi bi-tv flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Monitors</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <a class="p-2 flex items-center cursor-pointer select-none" href="#">
                                <i class="bi bi-printer flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Printers</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <a class="p-2 flex items-center cursor-pointer select-none" href="#">
                                <i class="bi bi-phone flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Smartphones</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <a class="flex items-center p-2 select-none" href="faqs.html">
                                <i class="bi bi-question-circle flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">FAQ's</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <a class="flex items-center p-2 select-none" href="contact-us.html">
                                <i class="bi bi-telephone flex text-xl text-primary-color mr-3"></i>
                                <span class="font-semibold">Contact Us</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-200">
                            <div class="metismenu-btn has-arrow p-2 flex items-center cursor-pointer select-none" aria-expanded="false" role="menu">
                                <span class="font-semibold">Pages</span>
                            </div>
                            <div class="metismenu-content mm-collapse">
                                <a class="btn-open-modal block ml-10 p-1" href="wishlist.html">Wishlist</a>
                                <a class="btn-open-modal block ml-10 p-1" href="shopping-cart.html">Shopping Cart</a>
                                <a class="btn-open-modal block ml-10 p-1" href="product-details.html">Product Details</a>
                                <a class="btn-open-modal block ml-10 p-1" href="checkout.html">Checkout</a>
                                <a class="btn-open-modal block ml-10 p-1" href="shop-mixed.html">Shop - Mixed</a>
                                <a class="btn-open-modal block ml-10 p-1" href="shop-listed.html">Shop - Listed</a>
                                <a class="btn-open-modal block ml-10 p-1" href="shop-grid.html">Shop - Grid</a>
                                <a class="btn-open-modal block ml-10 p-1" href="login.html">Login</a>
                                <a class="btn-open-modal block ml-10 p-1" href="sign-up.html">Sign Up</a>
                                <a class="btn-open-modal block ml-10 p-1" href="error404.html">Error 404</a>
                                <a class="btn-open-modal block ml-10 p-1" href="purchase-completed.html">Purchase Completed</a>
                                <a class="btn-open-modal block ml-10 p-1" href="purchase-failed.html">Purchase Failed</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="shopping-cart-modal modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
        <div class="flex h-full w-full">
            <div class="modal-content relative bg-white h-full w-[400px] min-w-[250px] right-[-999px] ml-auto transition-all duration-300 flex flex-col">
                <div class="w-full">
                    <div class="border-b-2 border-gray-200 p-5">
                        <h3 class="uppercase text-xl font-bold">Shopping Cart</h3>
                    </div>
                    <button class="btn-close-modal absolute top-5 right-5 p-[3px] hover:text-slate-400 transition-all duration-300">
                        <i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
                    </button>
                </div>
                <div class="h-full overflow-auto">
                    <!-- If the shopping cart is empty (replace hidden with flex) -->
                    <div class="hidden flex-col justify-center items-center p-5 gap-4">
                        <i class="bi bi-cart-x text-8xl text-gray-200"></i>
                        <p class="font-semibold">There are no products in the cart.</p>
                        <a class="btn-effect flex justify-center items-center p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300" href="#">
                            <span class="font-bold uppercase text-white">Go to the store</span>
                        </a>
                    </div>
                    <!-- -->
                    <a class="bg-white hover:bg-gray-50 flex justify-between items-center gap-5 h-[100px] w-full p-2" href="#">
                        <div class="border rounded-lg h-[80px] w-[80px] min-w-[80px] overflow-hidden">
                            <img class="w-full h-full object-cover" src="img/product/prod-1.jpg" alt="product">
                        </div>
                        <div class="flex flex-col w-full">
                            <h6 class="font-semibold text-lg clamp-2 break-all">Ryzen 5 3600x</h6>
                            <div class="flex gap-2">
                                <div class="flex gap-1 leading-7 text-gray-400">
                                    <span>1</span>
                                    <span>X</span>
                                </div>
                                <div class="flex gap-2 items-center">
                                    <span class="font-bold text-primary-color">$37.00</span>
                                    <small class="text-xs text-primary-color line-through">$50.00</small>
                                </div>
                            </div>
                        </div>
                        <div class="flex hover:text-primary-color transition-all duration-300">
                            <i class="bi bi-trash text-2xl pointer-events-none"></i>
                        </div>
                    </a>
                </div>
                <div class="bg-white px-1 xs:px-5 pt-5 border-t-2 border-gray-200 mt-auto">
                    <div class="flex justify-between">
                        <span class="uppercase text-lg">Subtotal:</span>
                        <span class="text-primary-color font-semibold text-lg">$37.00</span>
                    </div>
                    <a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="shopping-cart.html">
                        <span class="font-bold uppercase text-white">View Shopping Cart</span>
                    </a>
                    <a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="checkout.html">
                        <span class="font-bold uppercase text-white">Checkout now</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="wishlist-modal modal bg-overlay fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300">
        <div class="flex h-full w-full">
            <div class="modal-content relative bg-white h-full w-[400px] min-w-[250px] right-[-999px] ml-auto transition-all duration-300 flex flex-col">
                <div class="w-full">
                    <div class="border-b-2 border-gray-200 p-5">
                        <h3 class="uppercase text-xl font-bold">Wishlist</h3>
                    </div>
                    <button class="btn-close-modal absolute top-5 right-5 p-[3px] hover:text-slate-400 transition-all duration-300">
                        <i class="bi bi-x-lg flex text-xl text-stroke-medium pointer-events-none"></i>
                    </button>
                </div>
                <div class="h-full overflow-auto">
                    <!-- If the wishlist is empty (replace hidden with flex) -->
                    <div class="hidden flex-col justify-center items-center p-5 gap-4">
                        <i class="bi bi-heart text-8xl text-gray-200"></i>
                        <p class="font-semibold">There are no products in the wishlist.</p>
                        <a class="btn-effect flex justify-center items-center p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300" href="#">
                            <span class="font-bold uppercase text-white">Go to the store</span>
                        </a>
                    </div>
                    <a class="bg-white hover:bg-gray-50 flex justify-between items-center gap-5 h-[100px] w-full p-2" href="#">
                        <div class="border rounded-lg h-[80px] w-[80px] min-w-[80px] overflow-hidden">
                            <img class="w-full h-full object-cover" src="img/product/prod-1.jpg" alt="product">
                        </div>

                        <div class="flex flex-col w-full">
                            <h6 class="font-semibold text-lg clamp-2 break-all">Ryzen 5 3600x</h6>
                            <div class="flex gap-2 items-center">
                                <span class="font-bold text-primary-color">$37.00</span>
                                <small class="text-xs text-primary-color line-through">$50.00</small>
                            </div>
                        </div>

                        <div class="flex hover:text-primary-color transition-all duration-300">
                            <i class="bi bi-trash text-2xl pointer-events-none"></i>
                        </div>
                    </a>
                </div>
                <div class="bg-white px-1 xs:px-5 border-t-2 border-gray-200 mt-auto">
                    <a class="my-5 btn-effect flex justify-center items-center w-full p-2 bg-primary-color rounded-lg transition-all duration-300" href="wishlist.html">
                        <span class="font-bold uppercase text-white">View Wishlist</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-modal modal bg-overlay flex flex-col justify-start items-center fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300 overflow-auto">
        <div class="flex justify-center my-10 w-full">
            <div class="entry-content modal-content w-[500px] min-w-[250px] bg-white rounded-lg px-3 pb-3 xs:px-5 xs:pb-5 pt-7 mx-3 md:m-5 relative transition-all duration-300">
                <button class="btn-close-modal absolute top-0 right-0 sm:text-white sm:bg-primary-color sm:hover:bg-primary-hover transition-all duration-300 sm:top-[-10px] sm:right-[-10px] sm:rounded-lg p-2">
                    <i class="bi bi-x-lg flex text-stroke-medium pointer-events-none"></i>
                </button>
                <div class="entry-container">
                    <ul class="flex justify-between">
                        <li class="btn-tabs w-full p-2 border text-center transition-all duration-300 cursor-pointer bg-gray-200 text-gray-400 active">Login</li>
                        <li class="btn-tabs w-full p-2 border text-center transition-all duration-300 cursor-pointer bg-gray-200 text-gray-400">Sign Up</li>
                    </ul>
                    <div class="border border-t-transparent relative overflow-hidden">
                        <div class="tabs-block p-5 w-full absolute opacity-0 invisible">
                            <div class="my-5">
                                <img class="mx-auto" src="img/logo2.png" alt="logo">
                            </div>
                            <form action="#">
                                <div class="flex flex-col gap-4">
                                    <div class="relative flex items-center h-[40px]">
                                        <i class="bi bi-person absolute flex ml-2 text-gray-400 text-[24px]"></i>
                                        <input class="input pl-10" type="text" placeholder="Username or Email" required="" spellcheck="false" data-ms-editor="true">
                                    </div>
                                    <div class="relative flex items-center h-[40px]">
                                        <i class="bi bi-lock absolute flex ml-2 text-gray-400 text-[24px]"></i>
                                        <input class="input pl-10" type="password" placeholder="Password" required="">
                                    </div>
                                    <button class="btn-effect h-full w-full p-2 bg-primary-color rounded-lg transition-all duration-300" type="submit">
                                        <span class="font-bold uppercase text-white">Login</span>
                                    </button>
                                </div>
                                <div class="flex flex-wrap gap-2 justify-between items-center my-2">
                                    <label class="flex items-center gap-2 select-none">
                                        <input class="checkbox" type="checkbox">
                                        <span class="text-gray-title">Remember</span>
                                    </label>
                                    <a class="underlined-animated after:bottom-0 text-[#3091ff]" href="#">Forgot Password?</a>
                                </div>
                            </form>
                            <span class="or text-gray-title py-2 flex items-center h-[50px]">
                                <span class="text-sm uppercase mx-2">Or</span>
                            </span>
                            <div class="flex flex-col sm:flex-row justify-center flex-wrap gap-5">
                                <button class="bg-facebook flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
                                    <i class="bi bi-facebook flex text-white text-3xl"></i>
                                </button>
                                <button class="bg-twitter flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
                                    <i class="bi bi-twitter flex text-white text-3xl"></i>
                                </button>
                                <button class="bg-google flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
                                    <i class="bi bi-google flex text-white text-3xl"></i>
                                </button>
                            </div>
                        </div>
                        <div class="tabs-block p-5 bg-white w-full absolute opacity-0 invisible">
                            <div class="my-5">
                                <img class="mx-auto" src="img/logo2.png" alt="logo">
                            </div>
                            <form action="#">
                                <div class="flex flex-col gap-4">
                                    <div class="relative flex items-center h-[40px]">
                                        <i class="bi bi-person absolute flex ml-2 text-gray-400 text-[24px]"></i>
                                        <input class="input pl-10" type="text" placeholder="Name" required="" spellcheck="false" data-ms-editor="true">
                                    </div>
                                    <div class="relative flex items-center h-[40px]">
                                        <i class="bi bi-envelope absolute flex ml-2 text-gray-400 text-[24px]"></i>
                                        <input class="input pl-10" type="text" placeholder="Email" required="" spellcheck="false" data-ms-editor="true">
                                    </div>
                                    <div class="relative flex items-center h-[40px]">
                                        <i class="bi bi-lock absolute flex ml-2 text-gray-400 text-[24px]"></i>
                                        <input class="input pl-10" type="password" placeholder="Password" required="">
                                    </div>
                                    <div class="relative flex items-center h-[40px]">
                                        <i class="bi bi-lock-fill absolute flex ml-2 text-gray-400 text-[24px]"></i>
                                        <input class="input pl-10" type="password" placeholder="Confirm Password" required="">
                                    </div>
                                    <button class="btn-effect h-full w-full p-2 bg-primary-color rounded-lg transition-all duration-300" type="submit">
                                        <span class="font-bold uppercase text-white">Sign Up</span>
                                    </button>
                                </div>
                                <div class="flex justify-between items-center my-2">
                                    <label class="flex items-center gap-2 select-none">
                                        <input class="checkbox" type="checkbox">
                                        <span class="text-gray-title">I agree with all <a class="underlined-animated after:bottom-0 text-[#3091ff]" href="#">Terms of Use</a> &amp; <a class="underlined-animated after:bottom-0 text-[#3091ff]" href="#">Privacy Policy</a>.</span>
                                    </label>
                                </div>
                            </form>
                            <span class="or text-gray-title py-2 flex items-center h-[50px]">
                                <span class="text-sm uppercase mx-2">Or</span>
                            </span>
                            <div class="flex flex-col sm:flex-row justify-center flex-wrap gap-5">
                                <button class="bg-facebook flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
                                    <i class="bi bi-facebook flex text-white text-3xl"></i>
                                </button>
                                <button class="bg-twitter flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
                                    <i class="bi bi-twitter flex text-white text-3xl"></i>
                                </button>
                                <button class="bg-google flex justify-center items-center h-[50px] min-w-[100px] rounded-lg hover:scale-110 transition-all duration-300">
                                    <i class="bi bi-google flex text-white text-3xl"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="quick-view-modal modal bg-overlay flex flex-col justify-start items-center fixed z-50 h-full w-full inset-0 invisible opacity-0 transition-all duration-300 overflow-auto">
        <div class="flex justify-center my-10 w-full">
            <div class="modal-content scale-0 w-[900px] min-w-[250px] bg-body rounded-lg px-3 pb-3 xs:px-5 xs:pb-5 pt-7 mx-3 md:m-5 relative">
                <button class="btn-close-modal absolute top-0 right-0 sm:text-white sm:bg-primary-color sm:hover:bg-primary-hover transition-all duration-300 sm:top-[-10px] sm:right-[-10px] sm:rounded-lg p-2">
                    <i class="bi bi-x-lg flex text-stroke-medium pointer-events-none"></i>
                </button>
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 md:col-span-7 max-h-[500px]">
                        <div class="swiper swiper-top group relative flex items-center rounded-lg swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                            <div class="swiper-wrapper z-[5]" id="swiper-wrapper-d32f1b5af0832d94" aria-live="polite">
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 3" style="width: 493px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-zoom-container">
                                        <img src="img/product/prod-1.jpg" alt="product">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 3" style="width: 493px; opacity: 0; transform: translate3d(-493px, 0px, 0px);">
                                    <div class="swiper-zoom-container">
                                        <img src="img/product/prod-2.jpg" alt="product">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 493px; opacity: 0; transform: translate3d(-986px, 0px, 0px);">
                                    <div class="swiper-zoom-container">
                                        <img src="img/product/prod-3.jpg" alt="product">
                                    </div>
                                </div>
                            </div>
                            <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d32f1b5af0832d94" aria-disabled="false">❯</div>
                            <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4 swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-d32f1b5af0832d94" aria-disabled="true">❮</div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper swiper-thumbs swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-0a7d2bdb194802a9" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide cursor-pointer rounded-lg swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1 / 3" style="width: 115.75px; margin-right: 10px;">
                                    <img src="img/product/prod-1.jpg" alt="product">
                                </div>
                                <div class="swiper-slide cursor-pointer rounded-lg swiper-slide-visible swiper-slide-next" role="group" aria-label="2 / 3" style="width: 115.75px; margin-right: 10px;">
                                    <img src="img/product/prod-2.jpg" alt="product">
                                </div>
                                <div class="swiper-slide cursor-pointer rounded-lg swiper-slide-visible" role="group" aria-label="3 / 3" style="width: 115.75px; margin-right: 10px;">
                                    <img src="img/product/prod-3.jpg" alt="product">
                                </div>
                            </div>
                            <div class="button-next btn-slider-1 -right-16 transition-all duration-300 group-hover:right-4">❯</div>
                            <div class="button-prev btn-slider-1 -left-16 transition-all duration-300 group-hover:left-4">❮</div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <div class="col-span-12 md:col-span-5">
                        <div class="my-1">
                            <a class="clamp-2 text-2xl font-medium break-all hover:text-primary-color transition-all duration-300" href="#">
                                Ryzen 5 3600x
                            </a>
                        </div>
                        <div class="my-2 flex justify-between">
                            <div class="flex">
                                <i class="bi bi-star-fill text-base text-star flex"></i>
                                <i class="bi bi-star-fill text-base text-star flex"></i>
                                <i class="bi bi-star-fill text-base text-star flex"></i>
                                <i class="bi bi-star-fill text-base text-star flex"></i>
                                <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                            </div>
                            <div class="ml-auto">
                                <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                            </div>
                        </div>
                        <div class="flex items-center my-5 gap-5">
                            <div class="flex text-primary-color bg-white rounded-lg py-2 px-3">
                                <span class="text-sm">$</span>
                                <span class="text-2xl font-semibold leading-7">37.00</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-green-400 text-md font-semibold uppercase"> 25% Off</span>
                                <span class="prev-price text-sm text-primary-color line-through">$50.00</span>
                            </div>
                        </div>
                        <div class="my-5">
                            <p class="clamp-5 break-all">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate repellat magni exercitationem non, quaerat consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate.</p>
                        </div>
                        <div class="flex gap-1">
                            <form action="javascript:void(0)">
                                <div class="block mb-5">
                                    <div class="mt-2 flex gap-2">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="radio bg-blue-600 text-blue-600 focus:ring-blue-300 checked:ring-blue-300" name="radio-colors" value="0" checked="">
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="radio bg-red-600 text-red-600 focus:ring-red-300 checked:ring-red-300" name="radio-colors" value="1">
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="radio bg-yellow-600 text-yellow-600 focus:ring-yellow-300 checked:ring-yellow-300" name="radio-colors" value="2">
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="radio bg-black text-black focus:ring-gray-400 checked:ring-gray-400" name="radio-colors" value="3">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap justify-start gap-5">
                                    <div class="quantity inline-flex bg-white rounded-lg">
                                        <input class="quantity-value input-number w-12 text-center text-lg p-1 bg-transparent text-gray-400 border-none focus:ring-0 focus:border-none" type="number" value="0">
                                        <div class="flex flex-col justify-between w-5">
                                            <button class="quantity-btn increment text-primary-color" type="button"><i class="bi bi-caret-up-fill"></i></button>
                                            <button class="quantity-btn decrement text-primary-color" type="button"><i class="bi bi-caret-down-fill"></i></button>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="btn-effect flex justify-center items-center h-full w-full p-2 bg-primary-color rounded-lg gap-2 transition-all duration-300" type="submit">
                                            <i class="bi bi-cart-fill text-xl text-white flex"></i>
                                            <span class="font-bold uppercase text-white">Add to cart</span>
                                        </button>
                                        <a class="tippy tippy-wishlist btn-wishlist flex justify-center items-center min-w-[40px] min-h-[40px] p-2 bg-primary-color hover:bg-primary-hover rounded-lg gap-2 transition-all duration-300 cursor-pointer" href="javascript:void(0)">
                                            <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mt-5 pt-5 border-t border-gray-200">
                            <div>
                                <b>Categories: </b>
                                <span><a href="#" class="text-zinc-500">Hardware</a>, <a href="#" class="text-zinc-500">Processors</a></span>
                            </div>
                            <div class="flex gap-2">
                                <b>Share:</b>
                                <div class="flex items-center gap-[10px]">
                                    <a href="#">
                                        <i class="bi bi-facebook flex text-zinc-500 hover:text-primary-color transition-all duration-300"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-twitter flex text-zinc-500 hover:text-primary-color transition-all duration-300"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-whatsapp flex text-zinc-500 hover:text-primary-color transition-all duration-300"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-link-45deg flex text-zinc-500 hover:text-primary-color transition-all duration-300"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->

    <div class="btn-gotop fixed bottom-[-999px] right-10 z-50 invisible opacity-0 transition-all duration-300">
        <div class="bg-[rgba(0,0,0,.3)] hover:bg-primary-color rounded-lg p-3 cursor-pointer transition-all duration-300">
            <i class="bi bi-chevron-compact-up flex text-white text-2xl pointer-events-none"></i>
        </div>
    </div>

    <footer class="footer-section bg-[#0b0d17] text-gray-400 w-full mt-auto">
        <div class="grid grid-cols-12 container mx-auto px-4 xs:px-8">
            <div class="col-span-12 py-[50px]">
                <div class="grid grid-cols-12 gap-2">
                    <div class="col-span-12 sm:col-span-6 lg:col-span-4">
                        <div class="pb-6">
                            <img src="img/logo.png" class="h-[40px]" alt="logo">
                        </div>
                        <div>
                            <div class="flex items-center gap-[10px] py-2">
                                <i class="bi bi-envelope-fill text-xl text-primary-color flex"></i>
                                <a class="break-all" href="#">store@example.com</a>
                            </div>
                            <div class="flex items-center gap-[10px] py-2">
                                <i class="bi bi-telephone-fill text-xl text-primary-color flex"></i>
                                <a class="break-all" href="#">0101-010101</a>
                            </div>
                            <div class="flex items-center gap-[10px] py-2">
                                <i class="bi bi-geo-alt-fill text-xl text-primary-color flex"></i>
                                <span class="break-all">Colón 0101, Olavarría</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 col-span-12 sm:col-span-6 sm:py-0 lg:col-span-4">
                        <h3 class="text-gray-300 font-semibold pb-2">Useful Links</h3>
                        <div>
                            <ul class="text-sm flex flex-col flex-wrap xs:max-h-[200px] gap-2">
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Terms &amp; Conditions</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">New products</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Best sales</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Secure payment</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Services</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Delivery</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Legal Notice</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">About us</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Contact us</a>
                                </li>
                                <li class="group relative flex items-center hover:text-primary-color">
                                    <i class="bi bi-circle-fill flex text-[6px] text-primary-color invisible group-hover:visible absolute -left-4"></i>
                                    <a href="#" class="group-hover:text-white transition-all duration-300">Stores</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <h3 class="text-gray-300 font-semibold pb-2">Be the first to know it</h3>
                        <span class="text-sm py-2">Subscribe to receive updates on our store and special offers</span>
                        <form class="py-2">
                            <div class="bg-gray-rgba rounded-lg overflow-hidden p-2 flex">
                                <input class="bg-transparent w-full pl-2 border-none focus:ring-0 focus:ring-transparent focus:border-none" type="text" placeholder="Your email address" spellcheck="false" data-ms-editor="true">
                                <button class="p-1" type="submit">
                                    <i class="bi bi-send text-lg text-white flex"></i>
                                </button>
                            </div>
                        </form>
                        <div class="py-2 flex gap-2">
                            <div class="relative rounded-full h-8 w-8 overflow-hidden">
                                <a class="instagram-before flex justify-center items-center text-white bg-gray-rgba text-center h-8 w-8" href="#">
                                    <i class="bi bi-instagram flex relative z-[2]"></i>
                                </a>
                            </div>
                            <div class="bg-gray-rgba hover:bg-facebook rounded-full h-8 w-8 transition-all duration-300">
                                <a class="h-8 w-8 flex justify-center items-center" href="#">
                                    <i class="bi bi-facebook text-white flex"></i>
                                </a>
                            </div>
                            <div class="bg-gray-rgba hover:bg-twitter rounded-full h-8 w-8 transition-all duration-300">
                                <a class="h-8 w-8 flex justify-center items-center" href="#">
                                    <i class="bi bi-twitter text-white flex"></i>
                                </a>
                            </div>
                            <div class="bg-gray-rgba hover:bg-youtube rounded-full h-8 w-8 transition-all duration-300">
                                <a class="h-8 w-8 flex justify-center items-center" href="#">
                                    <i class="bi bi-youtube text-white flex"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 pb-5">
                <p class="text-center">© 2022 Example. All rights reserved</p>
            </div>
        </div>
    </footer>


@endsection
