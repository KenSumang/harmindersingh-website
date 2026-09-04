// Side Navigation Menu
let isMenuOpen = false;
function Menu(e) {
  let list = document.getElementById('side_nav');

  if (isMenuOpen) {
    list.classList.add('translate-x-[-100%]');
    list.classList.remove('translate-x-0');
    isMenuOpen = false;
  } else {
    list.classList.remove('translate-x-[-100%]');
    list.classList.add('translate-x-0');
    isMenuOpen = true;
  }
}


// Set Active Navigation Link Based on Current Page
function setActiveNav() {
    const currentPage = window.location.pathname;

    const subPageMap = {
        '/case-study/': '/case-studies',
        '/insight/':    '/insights',
    };

    let activePath = currentPage;
    for (const [subPath, parentPath] of Object.entries(subPageMap)) {
        if (currentPage.includes(subPath)) {
            activePath = parentPath;
            break;
        }
    }

    document.querySelectorAll('.nav-link').forEach(link => {
        const linkPath = new URL(link.href).pathname;
        if (activePath === linkPath || activePath.includes(linkPath.replace('/index.html', ''))) {
            const span = link.querySelector('span:last-child');
            link.classList.add('text-gold-accent');
            link.classList.remove('text-white', 'text-white/70');
            if (span) {
                span.classList.add('text-gold-accent');
                span.classList.remove('text-white/70');
            }
        }
    });
}
setActiveNav();

// Legal Services (Matters Section) Interactive List
const mattersData = {
  criminal: [
    { title: "Apprehended Violence Orders (AVOs)", description: "We have successfully defended a number of AVO's matters. An AVO is a court order made against a person which aims to protect and restrict the behaviour towards another person in need of protection. If you do not agree with the AVO, or if the AVO will impact your work/life then get in touch with us. We have successfully defended a number of these cases." },
    { title: "Domestic Violence", description: "Our experienced legal team handles all aspects of domestic violence matters with sensitivity and discretion. We provide strong representation to ensure your rights are protected throughout the legal process." },
    { title: "Firearms Offences", description: "Firearms offences carry serious penalties in NSW. Our legal team has extensive experience defending clients charged with unlicensed possession, improper storage, and other firearms-related charges." },
    { title: "Break and Enter Offences", description: "Break and enter charges can result in significant custodial sentences. We carefully examine all evidence and circumstances to build the strongest possible defence for your case." },
    { title: "Robbery Offences", description: "Robbery is treated as a serious criminal offence. Our team provides expert legal advice and representation, ensuring every aspect of your case is thoroughly examined and challenged where appropriate." },
    { title: "Fraud Offences", description: "Fraud charges require specialist legal knowledge. We have a strong track record defending complex fraud matters, from dishonest obtaining of financial advantage to identity fraud and beyond." },
    { title: "Drug Offences", description: "Drug offences range from possession to large-scale supply. Our lawyers provide strategic advice tailored to your specific charges, working to achieve the best possible outcome for your situation." },
    { title: "Commonwealth Offences", description: "Commonwealth offences are prosecuted under federal law and often carry heavier penalties. Our team is well-versed in federal criminal proceedings and will guide you through every step of the process." },
    { title: "Murder and Manslaughter Offences", description: "When facing the most serious criminal charges, you need the most experienced legal team. We provide comprehensive representation in murder and manslaughter matters, ensuring your rights are fully protected throughout." },
    { title: "Crime Offences", description: "Whatever the criminal charge, Quill Legal is here to help. Our team handles all categories of criminal offences with professionalism, dedication, and a commitment to achieving the best result for every client." },
  ],
  historical: [
    { title: "Government Organisations", description: "We understand it can be very difficult for people to contact a lawyer and speak about abuse they suffered. In some cases it may have taken years, even decades, for a survivor to come to terms with what happened before communicating about their suffering. We are committed to providing the best possible independent legal advice, so that survivors are empowered by choice and can make informed decisions." },
    { title: "Public and Private Schools", description: "If you were abused in school or college when younger and have undergone trauma, our specialist team of lawyers at Quill Legal can help you make a claim. We want to ensure that you have the help that is needed for you to move on from this traumatic experience." },
    { title: "Churches", description: "A large number of abuse claims are brought against religious organisations. Church abuse is sadly very real and there have been many instances of those in charge being held to account for their inappropriate actions. Our historical sexual abuse lawyers are here to provide support and guidance at a very difficult time. If you or someone you know has suffered church abuse, then do get in touch with us." },
    { title: "Youth and Sporting Clubs", description: "If you have been abused by a sports coach or youth club leader, whether physical, sexual or emotional, you could be entitled to justice. Historical sexual abuse is a complex area of law, and it's important you seek legal advice from an experienced abuse lawyer as soon as possible." },
    { title: "Prisons and Juvenile Centres", description: "It's a known fact that juvenile justice homes, established to provide care and protection as well as re-integration, rehabilitation and restoration of the children have literally been hell holes, where juveniles have been subjected to sexual abuse. If you have suffered or know of someone who has undergone historical sexual abuse in prisons or juvenile centres, then do get in touch with our expert lawyers at Quill Legal." },
  ],
  traffic: [
    { title: "Speeding Offences and Fines", description: "Whether you are at risk of losing your driving licence or risk a suspension, you will need expert advice on your legal options. Quill Legal understands the situation can cause distress and wants to help you." },
    { title: "Negligence/Dangerous Driving", description: "In New South Wales, the standard which is classified as negligent driving is relatively low. Basically, a driver is said to be negligent if they did not drive to a standard that a prudent driver would have, given the same circumstances." },
    { title: "Driving Whilst Suspended/Disqualified", description: "Our traffic infringement lawyers always have your best interests at heart. If you rely on your licence for work or driving the children to and from school, we can help you appeal against any suspension or disqualification periods." },
    { title: "Drink and Drug Driving", description: "Driving under the influence of alcohol or drink driving is one of the most common causes of road traffic accidents in New South Wales. This offence carries serious penalties, which all involve a period of disqualification from driving." },
    { title: "Police Pursuits", description: "Driving under the influence of alcohol or drink driving is one of the most common causes of road traffic accidents in New South Wales. This offence carries serious penalties, which all involve a period of disqualification from driving." },
  ],
  family: [
    { title: "Separation and Divorce", description: "For many, divorce is one of the most traumatic events of their life. The relationship you thought was for life is coming to an end, and it can be hard to comprehend what is happening, and what you need to do. You may find your spouse has become embittered and nasty, and you need a stable advisor to help you navigate safely through the legal aspects of the circumstances." },
    { title: "Parenting", description: "For many, divorce is one of the most traumatic events of their life. The relationship you thought was for life is coming to an end, and it can be hard to comprehend what is happening, and what you need to do. You may find your spouse has become embittered and nasty, and you need a stable advisor to help you navigate safely through the legal aspects of the circumstances." },
    { title: "Mediation", description: "Mediation can often be as informal as having a family member or friend helping you talk through a dispute. But what does that \"friend\" or \"family member\" know about family law? If you're lucky, maybe your brother/sister or friend is a lawyer, but in most cases, they are not!" },
    { title: "Property Settlement", description: "A divorce only relates to the ending of a marriage. Although it will include any necessary arrangements for the care of children under 18, property issues are another legal matter — one which Quill Legal can once again help with!" },
    { title: "Binding Financial Agreements", description: "At the time of separation or divorce, our children need as much love, support and contact from both parents as possible. While you may not be certain about other matters, like property or financial settlements, the future and stability are crucial for your children." },
  ],
  commercial: [
    { title: "Commercial Leasing", description: "If you find yourself in the position where a dispute has arisen relating to your business, you will need a competent commercial litigation lawyer to act on your behalf. This is where Quill Legal steps in. We understand the complex nature of disputes involving corporate or business law, and will do our utmost to help resolve issues without legal action." },
    { title: "Commercial Litigation", description: "If you find yourself in the position where a dispute has arisen relating to your business, you will need a competent commercial litigation lawyer to act on your behalf. This is where Quill Legal steps in. We understand the complex nature of disputes involving corporate or business law, and will do our utmost to help resolve issues without legal action." },
    { title: "Purchasing or Selling a Business", description: "Buying or selling a business can be stressful for anyone. Quill Legal aims to make the process as smooth and seamless as possible, allowing you to concentrate on the daily operation of your new or existing enterprise." },
    { title: "Business Transactions", description: "Buying or selling a business can be stressful for anyone. Quill Legal aims to make the process as smooth and seamless as possible, allowing you to concentrate on the daily operation of your new or existing enterprise." },
    { title: "Contracts, Agreements and Deeds", description: "Buying or selling a business can be stressful for anyone. Quill Legal aims to make the process as smooth and seamless as possible, allowing you to concentrate on the daily operation of your new or existing enterprise." },
  ],
};

// Legal Services Links
const legalServicesLinks = {
    criminal: "https://quilllegal.com.au/legal-services/criminal-law/",
    historical: "https://quilllegal.com.au/legal-services/historical-sexual-abuse/",
    traffic: "https://quilllegal.com.au/legal-services/traffic-law/",
    family: "https://quilllegal.com.au/legal-services/family-law/",
    commercial: "https://quilllegal.com.au/legal-services/commercial-law/",
};


// Legal Services (Matters Section) Category Tabs
const categoryTabs = document.querySelectorAll('.category-tab');

if (categoryTabs.length > 0) {
  const mattersList = document.getElementById('matters-list');
  const titleEl = document.getElementById('matter-title');
  const descEl = document.getElementById('matter-description');

  if (mattersList || titleEl || descEl) {
    titleEl.style.transition = 'opacity 0.2s ease';
    descEl.style.transition = 'opacity 0.2s ease';
  }

  function renderList(category) {
    const items = mattersData[category];
    const linkButton = document.getElementById('matter-link');
    linkButton.href = legalServicesLinks[category];
    mattersList.innerHTML = '';

    items.forEach((item, index) => {
      const li = document.createElement('li');
      li.className = 'matter-item flex flex-col cursor-pointer';
      li.dataset.title = item.title;
      li.dataset.description = item.description;

      li.innerHTML = `
        <div class="relative flex items-start gap-3 text-[#0d1b2e] text-sm sm:text-base hover:text-gold-accent transition-colors duration-200">
          <span class="flex-shrink-0">${index + 1}.</span>
          <span>${item.title}</span>
        </div>
        <div class="absolute gold-line mt-6 h-px w-full max-w-xs ${index === 0 ? 'bg-gold-accent' : 'hidden'}"></div>
      `;

      li.addEventListener('click', () => selectItem(li));
      mattersList.appendChild(li);
    });

    // Auto-select first item
    selectItem(mattersList.firstChild);
  }

  function selectItem(selectedLi) {
    mattersList.querySelectorAll('.matter-item').forEach(i => {
      const line = i.querySelector('.gold-line');
      line.classList.add('hidden');
      line.classList.remove('bg-gold-accent');
    });

    const line = selectedLi.querySelector('.gold-line');
    line.classList.remove('hidden');
    line.classList.add('bg-gold-accent');

    titleEl.style.opacity = '0';
    descEl.style.opacity = '0';

    setTimeout(() => {
      titleEl.textContent = selectedLi.dataset.title;
      descEl.textContent = selectedLi.dataset.description;
      titleEl.style.opacity = '1';
      descEl.style.opacity = '1';
    }, 200);
  }

  categoryTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      console.log('Category tab clicked:', tab.dataset.category);
      categoryTabs.forEach(t => {
        t.classList.remove('bg-gold-accent', 'border-gold-accent', 'text-white');
        t.classList.add('bg-transparent', 'border-[#0d1b2e]', 'text-[#0d1b2e]');
      });

      tab.classList.remove('bg-transparent', 'border-[#0d1b2e]', 'text-[#0d1b2e]');
      tab.classList.add('bg-gold-accent', 'border-gold-accent', 'text-white', 'hover:border-[#0d1b2e]');

      renderList(tab.dataset.category);
    });
  });

  // Init with first category
  if (mattersList || titleEl || descEl) {
    renderList('criminal');
  }
}


function initPostsFilter(config) {
    const grid       = document.getElementById(config.gridId);
    const pagination = document.getElementById(config.paginationId);

    if (!grid) return;

    let currentCategory = '';
    let currentSearch   = '';
    let currentPage     = 1;

    function fetchPosts() {
        grid.style.opacity = '0.4';

        const formData = new FormData();
        formData.append('action',    'filter_posts');
        formData.append('nonce',     harminder_ajax.nonce);
        formData.append('post_type', config.postType);
        formData.append('category',  currentCategory);
        formData.append('search',    currentSearch);
        formData.append('paged',     currentPage);

        fetch(harminder_ajax.ajax_url, {
            method: 'POST',
            body:   formData,
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                grid.innerHTML     = data.data.cards;
                grid.style.opacity = '1';
                renderPagination(data.data.total_pages, data.data.paged);
            }
        });
    }

    function renderPagination(totalPages, paged) {
        if (!pagination) return;

        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }

        let dotsHtml = '<div class="flex gap-3">';
        for (let i = 1; i <= totalPages; i++) {
            dotsHtml += `<button class="dot w-2.5 h-2.5 rounded-full transition-colors duration-200 ${i === paged ? 'bg-gold-accent' : 'bg-[#0d1b2e]/20 hover:bg-gold-accent/50'}" data-page="${i}"></button>`;
        }
        dotsHtml += '</div>';

        const prevBtn = paged <= 1
            ? `<span class="w-10 h-10 border border-[#0d1b2e]/20 flex items-center justify-center text-[#0d1b2e]/20 cursor-not-allowed">←</span>`
            : `<button class="prev-btn w-10 h-10 border border-[#0d1b2e] flex items-center justify-center text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white transition-colors duration-200">←</button>`;

        const nextBtn = paged >= totalPages
            ? `<span class="w-10 h-10 border border-[#0d1b2e]/20 flex items-center justify-center text-[#0d1b2e]/20 cursor-not-allowed">→</span>`
            : `<button class="next-btn w-10 h-10 border border-[#0d1b2e] flex items-center justify-center text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white transition-colors duration-200">→</button>`;

        pagination.innerHTML = dotsHtml + `
            <div class="flex items-center gap-6">
                ${prevBtn}
                <span class="text-[#0d1b2e] text-sm font-semibold">${paged} / ${totalPages}</span>
                ${nextBtn}
            </div>`;

        pagination.querySelectorAll('.dot').forEach(dot => {
            dot.addEventListener('click', () => {
                currentPage = parseInt(dot.dataset.page);
                fetchPosts();
            });
        });

        const prevEl = pagination.querySelector('.prev-btn');
        if (prevEl) prevEl.addEventListener('click', () => { currentPage--; fetchPosts(); });

        const nextEl = pagination.querySelector('.next-btn');
        if (nextEl) nextEl.addEventListener('click', () => { currentPage++; fetchPosts(); });
    }

    // Category tabs
    document.querySelectorAll(config.tabSelector).forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll(config.tabSelector).forEach(t => {
              t.classList.remove('bg-gold-accent', 'border-gold-accent', 'text-white');
              t.classList.add('bg-transparent', 'border-[#0d1b2e]', 'text-[#0d1b2e]');
            });

            tab.classList.remove('bg-transparent', 'border-[#0d1b2e]', 'text-[#0d1b2e]');
            tab.classList.add('bg-gold-accent', 'border-gold-accent', 'text-white');

            currentCategory = tab.dataset.category;
            currentPage     = 1;
            fetchPosts();
        });
    });

    // Search
    const searchInput = document.getElementById(config.searchInputId);
    const searchBtn   = document.getElementById(config.searchBtnId);

    if (searchBtn) {
        searchBtn.addEventListener('click', () => {
            currentSearch = searchInput.value;
            currentPage   = 1;
            fetchPosts();
        });
    }

    if (searchInput) {
        searchInput.addEventListener('keydown', e => {
            if (e.key === 'Enter') {
                currentSearch = e.target.value;
                currentPage   = 1;
                fetchPosts();
            }
        });
    }

    // Initial load
    fetchPosts();
}


// Property Development Projects AJAX pagination
const projectsGrid = document.getElementById('projects-grid');

if (projectsGrid) {
    let currentPage = 1;

    function fetchProjects() {
        projectsGrid.style.opacity = '0.4';

        const formData = new FormData();
        formData.append('action', 'filter_projects');
        formData.append('nonce',  harminder_ajax.nonce);
        formData.append('paged',  currentPage);

        fetch(harminder_ajax.ajax_url, {
            method: 'POST',
            body:   formData,
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                projectsGrid.innerHTML     = data.data.cards;
                projectsGrid.style.opacity = '1';
                renderProjectsPagination(data.data.total_pages, data.data.paged);
            }
        });
    }
    
    function renderProjectsPagination(totalPages, paged) {
        const pagination = document.getElementById('projects-pagination');
        if (!pagination) return;

        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }

        let dotsHtml = '<div class="flex gap-3">';
        for (let i = 1; i <= totalPages; i++) {
            dotsHtml += `<button class="dot w-2.5 h-2.5 rounded-full transition-colors duration-200 ${i === paged ? 'bg-gold-accent' : 'bg-[#0d1b2e]/20 hover:bg-gold-accent/50'}" data-page="${i}"></button>`;
        }
        dotsHtml += '</div>';

        const prevBtn = paged <= 1
            ? `<span class="w-10 h-10 border border-[#0d1b2e]/20 flex items-center justify-center text-[#0d1b2e]/20 cursor-not-allowed">←</span>`
            : `<button class="project-prev w-10 h-10 border border-[#0d1b2e] flex items-center justify-center text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white transition-colors duration-200">←</button>`;

        const nextBtn = paged >= totalPages
            ? `<span class="w-10 h-10 border border-[#0d1b2e]/20 flex items-center justify-center text-[#0d1b2e]/20 cursor-not-allowed">→</span>`
            : `<button class="project-next w-10 h-10 border border-[#0d1b2e] flex items-center justify-center text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white transition-colors duration-200">→</button>`;

        pagination.innerHTML = dotsHtml + `
            <div class="flex items-center gap-6">
                ${prevBtn}
                <span class="text-[#0d1b2e] text-sm font-semibold">${paged} / ${totalPages}</span>
                ${nextBtn}
            </div>`;

        pagination.querySelectorAll('.dot').forEach(dot => {
            dot.addEventListener('click', () => {
                currentPage = parseInt(dot.dataset.page);
                fetchProjects();
            });
        });

        const prevEl = pagination.querySelector('.project-prev');
        if (prevEl) prevEl.addEventListener('click', () => { currentPage--; fetchProjects(); });

        const nextEl = pagination.querySelector('.project-next');
        if (nextEl) nextEl.addEventListener('click', () => { currentPage++; fetchProjects(); });
    }

    // Initial load
    fetchProjects();
}


// Real Estate AJAX pagination
const realestateGrid = document.getElementById('realestate-grid');

if (realestateGrid) {
    let currentPage = 1;

    function fetchRealestate() {
        realestateGrid.style.opacity = '0.4';

        const formData = new FormData();
        formData.append('action', 'filter_realestate');
        formData.append('nonce',  harminder_ajax.nonce);
        formData.append('paged',  currentPage);

        fetch(harminder_ajax.ajax_url, {
            method: 'POST',
            body:   formData,
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                realestateGrid.innerHTML     = data.data.cards;
                realestateGrid.style.opacity = '1';
                renderRealestatePagination(data.data.total_pages, data.data.paged);
            }
        });
    }

    function renderRealestatePagination(totalPages, paged) {
        const pagination = document.getElementById('realestate-pagination');
        if (!pagination) return;

        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }

        let dotsHtml = '<div class="flex gap-3">';
        for (let i = 1; i <= totalPages; i++) {
            dotsHtml += `<button class="dot w-2.5 h-2.5 rounded-full transition-colors duration-200 ${i === paged ? 'bg-gold-accent' : 'bg-[#0d1b2e]/20 hover:bg-gold-accent/50'}" data-page="${i}"></button>`;
        }
        dotsHtml += '</div>';

        const prevBtn = paged <= 1
            ? `<span class="w-10 h-10 border border-[#0d1b2e]/20 flex items-center justify-center text-[#0d1b2e]/20 cursor-not-allowed">←</span>`
            : `<button class="realestate-prev w-10 h-10 border border-[#0d1b2e] flex items-center justify-center text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white transition-colors duration-200">←</button>`;

        const nextBtn = paged >= totalPages
            ? `<span class="w-10 h-10 border border-[#0d1b2e]/20 flex items-center justify-center text-[#0d1b2e]/20 cursor-not-allowed">→</span>`
            : `<button class="realestate-next w-10 h-10 border border-[#0d1b2e] flex items-center justify-center text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white transition-colors duration-200">→</button>`;

        pagination.innerHTML = dotsHtml + `
            <div class="flex items-center gap-6">
                ${prevBtn}
                <span class="text-[#0d1b2e] text-sm font-semibold">${paged} / ${totalPages}</span>
                ${nextBtn}
            </div>`;

        pagination.querySelectorAll('.dot').forEach(dot => {
            dot.addEventListener('click', () => {
                currentPage = parseInt(dot.dataset.page);
                fetchRealestate();
            });
        });

        const prevEl = pagination.querySelector('.realestate-prev');
        if (prevEl) prevEl.addEventListener('click', () => { currentPage--; fetchRealestate(); });

        const nextEl = pagination.querySelector('.realestate-next');
        if (nextEl) nextEl.addEventListener('click', () => { currentPage++; fetchRealestate(); });
    }

    // Initial load
    fetchRealestate();
}


// Initialize for Insights page
initPostsFilter({
    postType:      'insight',
    gridId:        'insights-grid',
    paginationId:  'insights-pagination',
    tabSelector:   '.insights-tab',
    searchInputId: 'insights-search',
    searchBtnId:   'insights-search-btn',
});

// Initialize for Case Studies page
initPostsFilter({
    postType:      'case_study',
    gridId:        'case-studies-grid',
    paginationId:  'case-studies-pagination',
    tabSelector:   '.case-studies-tab',
    searchInputId: 'case-studies-search',
    searchBtnId:   'case-studies-search-btn',
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      observer.unobserve(entry.target); // Stop watching once visible
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.slide-up').forEach(el => {
  observer.observe(el);
});

document.querySelectorAll('.slide-up-delay').forEach(el => {
  observer.observe(el);
});