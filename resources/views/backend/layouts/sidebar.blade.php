

        <!-- SIDEBAR -->

        
        <aside class="app-sidebar" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.php" class="header-logo">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                    <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg></div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        
                        <li class="slide">
                            <a href="{{route('admin.dashboard')}}" class="side-menu__item">
                                <i class="bx bx-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Pages</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-file-blank side-menu__icon"></i>
                                <span class="side-menu__label">Pages<span
                                    class="text-secondary text-[0.75em] rounded-sm !py-[0.25rem] !px-[0.45rem] badge !bg-secondary/10 ms-2">New</span></span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Pages</a></li>
                                <li class="slide"><a href="{{route('admin.management')}}" class="side-menu__item">Management</a></li>
                                <li class="slide"><a href="{{route('admin.special')}}" class="side-menu__item">Special</a></li>
                                <li class="slide"><a href="{{route('admin.award')}}" class="side-menu__item">Award List</a></li>
                                {{-- <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Blog<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="blog.html" class="side-menu__item">Blog</a></li>
                                        <li class="slide"><a href="blog-details.html" class="side-menu__item">Blog
                                                Details</a>
                                        </li>
                                        <li class="slide"><a href="blog-create.html" class="side-menu__item">Blog Create</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chat.html" class="side-menu__item">Chat</a>
                                </li>
                                <li class="slide"><a href="contacts.html" class="side-menu__item">Contacts</a></li>
                                <li class="slide"><a href="contactus.html" class="side-menu__item">Contact Us</a></li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Ecommerce<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="add-products.html" class="side-menu__item">Add Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="cart.html" class="side-menu__item">Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="checkout.html" class="side-menu__item">Checkout</a>
                                        </li>
                                        <li class="slide">
                                            <a href="edit-products.html" class="side-menu__item">Edit Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="order-details.html" class="side-menu__item">Order Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="orders.html" class="side-menu__item">Orders</a>
                                        </li>
                                        <li class="slide">
                                            <a href="products.html" class="side-menu__item">Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="products-details.html" class="side-menu__item">Products Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="products-list.html" class="side-menu__item">Products List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">EMail<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="mail.php" class="side-menu__item">Mail App</a></li>
                                        <li class="slide"><a href="mail-settings.html" class="side-menu__item">Mail Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide"><a href="empty-page.html" class="side-menu__item">Empty</a></li>
                                <li class="slide"><a href="faqs.html" class="side-menu__item">FAQ's</a></li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">File Manager
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="filemanager.html" class="side-menu__item">File Manager</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Invoice<i
                                            class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="invoice-create.html" class="side-menu__item">Create Invoice</a>
                                        </li>

                                        <li class="slide"><a href="invoice-details.html" class="side-menu__item">Invoice Details</a>
                                        </li>
                                        <li class="slide"><a href="invoice-list.html" class="side-menu__item">Invoice List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide"><a href="landing.html" class="side-menu__item">Landing</a></li>
                                <li class="slide">
                                    <a href="landing-jobs.html" class="side-menu__item">Jobs Landing<span
                                        class="text-secondary text-[0.75em] rounded-sm badge !py-[0.25rem] !px-[0.45rem] !bg-secondary/10 ms-2">New</span></a>
                                </li>
                                <li class="slide">
                                    <a href="notifications.html" class="side-menu__item">Notifications</a>
                                </li>
                                <li class="slide"><a href="pricing.html" class="side-menu__item">Pricing</a></li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item">Profile</a>
                                </li>
                                <li class="slide"><a href="reviews.html" class="side-menu__item">Reviews</a></li>
                                <li class="slide"><a href="team.php" class="side-menu__item">Team</a></li>
                                <li class="slide"><a href="terms.html" class="side-menu__item">Terms &amp; Conditions</a></li>
                                <li class="slide"><a href="timeline.html" class="side-menu__item">Timeline</a></li>
                                <li class="slide"><a href="todo.html" class="side-menu__item">To Do List</a></li> --}}
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-grid-alt side-menu__icon"></i>
                                <span class="side-menu__label">Apps
                                    <span
                                    class=""></span>
                                </span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                {{-- <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li> --}}
                                <li class="slide">
                                    <a href="{{route('admin.slider')}}" class="side-menu__item">Slider</a>
                                    <a href="{{route('admin.system.edit')}}" class="side-menu__item">System</a>
                                </li>
                                {{-- <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Projects
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="projects-list.html" class="side-menu__item">Projects List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="projects-overview.html" class="side-menu__item">Projects Overview</a>
                                        </li>
                                        <li class="slide">
                                            <a href="projects-create.html" class="side-menu__item">Projects Create</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Jobs
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="job-details.html" class="side-menu__item">Job Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-company-search.html" class="side-menu__item">Job Search Company</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-search.html" class="side-menu__item">Job Search </a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-post.html" class="side-menu__item">Job Post</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-list.html" class="side-menu__item">Job List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-candidate-search.html" class="side-menu__item">Job Candidate Search</a>
                                        </li>
                                        <li class="slide">
                                            <a href="job-candidate-details.html" class="side-menu__item">Job Candidate Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">NFT
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="nft-marketplace.html" class="side-menu__item">Market Place</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-details.html" class="side-menu__item">NFT Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-create.html" class="side-menu__item">Create NFT</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-wallet-integration.html" class="side-menu__item">Wallet Integration</a>
                                        </li>
                                        <li class="slide">
                                            <a href="nft-live-auction.html" class="side-menu__item">Live Auction</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">CRM
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="crm-contacts.html" class="side-menu__item">Contacts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crm-companies.html" class="side-menu__item">Companies</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crm-deals.html" class="side-menu__item">Deals</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crm-leads.html" class="side-menu__item">Leads</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Crypto
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="crypto-transactions.html" class="side-menu__item">Transactions</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-currency-exchange.html" class="side-menu__item">Currency Exchange</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-buy-sell.html" class="side-menu__item">Buy &amp; Sell</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-marketcap.html" class="side-menu__item">Marketcap</a>
                                        </li>
                                        <li class="slide">
                                            <a href="crypto-wallet.html" class="side-menu__item">Wallet</a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-layer side-menu__icon"></i>
                                <span class="side-menu__label">Nested Menu</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Nested Menu</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Maps &amp; Icons</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <i class="bx bx-store-alt side-menu__icon"></i>
                                <span class="side-menu__label">Icons</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                    </div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- END SIDEBAR -->