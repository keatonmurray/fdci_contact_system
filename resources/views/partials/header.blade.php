<header class="my-5 d-flex justify-content-between align-items-center">
    <h4 class="contact-header-title">Contacts</h4>
    
    <!-- Search Bar -->
    <div class="d-flex mx-4 w-50">
        <input class="form-control line-input me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-custom" type="submit">
            <i class="fas fa-search search-icon"></i>
        </button>
    </div>
    
    <!-- Action Buttons -->
    <div class="d-flex align-items-center">
        <ul class="list-unstyled mb-0 d-flex gap-1">
            <li>
                <a href="{{route('add-contact')}}" class="text-decoration-none btn btn-sm btn-custom header-btn">
                    <i class="fa-solid fa-plus me-2"></i>
                    Add Contacts
                </a>
            </li>
            <li>
                <a href="{{route('contact')}}" class="text-decoration-none btn btn-sm btn-custom header-btn">
                    <i class="fa-solid fa-eye me-2"></i>
                    Contacts
                </a>
            </li>
            <li>
                <a href="#" class="text-decoration-none btn btn-sm btn-custom header-btn">
                    <i class="fa-solid fa-right-from-bracket me-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</header>