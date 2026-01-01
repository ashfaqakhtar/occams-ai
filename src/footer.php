<footer class="px-5 py-12.5 w-full overflow-hidden">
    <div class='container mx-auto'>
        <div class="bg-[#FFF5F0] md:px-13.75 px-8 md:py-20 py-14 rounded-4xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-10 lg:gap-8 gap-8">
                <div>
                    <a href="index">
                        <img src='./assets/images/occams-ai.svg' class='lg:h-12 h-10' alt='Occams Ai' />
                    </a>

                    <p class="my-5 text-[#52525B] xl:text-base lg:text-[15px] text-base leading-[1.7]">
                        Lorem ipsum dolor sit amet,
                        <br />
                        consectetur adipiscing elit.
                    </p>

                    <div class="flex gap-4">
                        <a href='' target="_blank" class="w-8 h-8 flex items-center justify-center text-[#EF6A24] 
                            cursor-pointer">
                            <img src='./assets/icons/twitter.png' alt='Twitter' />
                        </a>

                        <a href='' target="_blank" class="w-8 h-8 flex items-center justify-center text-[#EF6A24]
                            cursor-pointer">
                            <img src='./assets/icons/facebook.png' alt='Facebook' />
                        </a>

                        <a href='' target="_blank" class="w-8 h-8 flex items-center justify-center text-[#EF6A24]
                            cursor-pointer">
                            <img src='./assets/icons/instagram.png' alt='Instagram' />
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="relative text-2xl text-[#1E1E1E] font-semibold pb-2 uppercase">
                        Company
                    </h3>

                    <ul class="mt-7.25 h-[65%] flex flex-col justify-between gap-2">
                        <li class="text-[#52525B]">
                            <a href='who-we-are' class="text-base leading-[1.8]">
                                Who we are
                            </a>

                            <ul class="mt-1 ml-7 list-disc text-[#52525B]">
                                <li class="text-base leading-[1.8]">
                                    <a href='brand'>Brand Story</a>
                                </li>

                                <li class="text-base leading-[1.8]">
                                    <a href='our-researchers'>Researchers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="text-[#52525B]">
                            <a href='our-services' class="text-base leading-[1.8]">
                                Our Services / Products
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="relative text-2xl text-[#1E1E1E] font-semibold pb-2 uppercase">
                        Resources
                    </h3>

                    <ul class="mt-7.25 h-[65%] flex flex-col justify-between gap-2">
                        <li class="text-[#52525B]">
                            <a href='insights' class="text-base leading-[1.8]">Insights</a>
                        </li>

                        <li class="text-[#52525B]">
                            <a href='career' class="text-base leading-[1.8]">Career</a>
                        </li>

                        <li class="text-[#52525B]">
                            <a href='contact' class="text-base leading-[1.8]">Contact</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="relative text-2xl text-[#1E1E1E] font-semibold pb-2 uppercase">
                        NEWSLETTER
                    </h3>

                    <form class="mt-7.25">
                        <div class="relative flex items-center">
                            <span class="absolute left-3 mt-px top-1/2 -translate-y-1/2 text-[#A1A1AA]">
                                <img src="./assets/icons/email-icon.png" alt="Email Icon" />
                            </span>

                            <input name="subscriber" placeholder='Enter your email address' class="w-full h-12 text-base 
                                rounded-[9px] px-4 border text-[#0E314C] outline-none border-[#E4E4E7] bg-white pl-10">
                        </div>

                        <div class="flex justify-center">
                            <button type="submit" disabled={loading} class="rounded-[30px] text-base py-2.5
                                h-10.5 flex items-center font-semibold cursor-pointer text-white px-5 
                                linear-background w-full mt-4 text-center justify-center">
                                Subscribe Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="border border-[#E4E4E7] mt-16" />

            <div class="md:py-3 py-4 flex flex-col md:flex-row sm:items-center sm:justify-between gap-3">
                <div class="flex sm:flex-row flex-col md:items-center items-start gap-3 sm:gap-8 md:gap-6 
                    lg:gap-8 text-base leading-[1.8] text-[#52525B]">
                    <a href="contact">Contact</a>
                    <a href="privacy-policy">Privacy policy</a>
                    <a href="sitemap">Sitemap</a>
                    <a href="terms-conditions">Terms of Use</a>
                </div>

                <p class="text-base leading-[1.8] text-[#52525B]">
                    © <script>document.write(new Date().getFullYear());</script>, All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>

</body>

<script>
    (function () {
        const MID = () => window.innerHeight / 2;

        const nodes = Array.from(document.querySelectorAll("[data-split]"));

        nodes.forEach(node => {
            const text = node.textContent;
            node.textContent = "";

            const frag = document.createDocumentFragment();
            const charSpans = [];

            for (let i = 0; i < text.length; i++) {
                const ch = text[i];

                if (ch === " ") {
                    frag.appendChild(document.createTextNode(" "));
                    continue;
                }

                const span = document.createElement("span");
                span.className = "char char-muted text-gray-500";
                span.textContent = ch;
                charSpans.push(span);
                frag.appendChild(span);
            }

            node.appendChild(frag);
            node._chars = charSpans;
            node._activeCount = 0;
        });

        function clamp(v, a, b) { return Math.min(b, Math.max(a, v)); }

        function update() {
            const mid = MID();

            nodes.forEach(node => {
                const rect = node.getBoundingClientRect();
                const progress = clamp((mid - rect.top) / Math.max(rect.height, 1), 0, 1);
                const target = Math.floor(progress * node._chars.length);

                if (target === node._activeCount) return;

                if (target > node._activeCount) {
                    for (let i = node._activeCount; i < target; i++) {
                        const s = node._chars[i];
                        s.classList.remove("char-muted", "text-gray-500");
                        s.classList.add("char-active", "text-gray-900", "font-semibold");
                    }
                } else {
                    for (let i = target; i < node._activeCount; i++) {
                        const s = node._chars[i];
                        s.classList.add("char-muted", "text-gray-500");
                        s.classList.remove("char-active", "text-gray-900", "font-semibold");
                    }
                }

                node._activeCount = target;
            });
        }

        const style = document.createElement("style");
        style.textContent = `.char { transition: opacity .18s ease-out, color .18s ease-out; }
            .char-muted { opacity:.25; } .char-active { opacity:1; }`;
        document.head.appendChild(style);

        update();
        let ticking = false;
        function onScroll() {
            if (!ticking) {
                requestAnimationFrame(() => { update(); ticking = false; });
                ticking = true;
            }
        }
        window.addEventListener("scroll", onScroll, { passive: true });
        window.addEventListener("resize", update);
    })();
</script>

<!-- Card Stack Section -->
<script>
    const cards = [...document.querySelectorAll(".stack-card")];
    let order = cards.map(c => c.dataset.id);

    const IMG_MAP = {
        "1": "./assets/images/build-note.png",
        "2": "./assets/images/playbook.png",
        "3": "./assets/images/field-guide.png",
        "4": "./assets/images/transparency.png",
    };

    const activeMedia = document.getElementById("activeMedia");
    const stack = document.getElementById("stack");

    const shadowStack = `
        3.55px 2.13px 8.51px 0px #8C8C8C1A,
        14.19px 7.8px 16.32px 0px #8C8C8C17,
        31.22px 17.74px 21.29px 0px #8C8C8C0D,
        56.05px 31.93px 25.54px 0px #8C8C8C03,
        87.27px 49.67px 28.38px 0px #8C8C8C00;
    `;

    function setActiveOnly(activeId) {
        const mobile = window.matchMedia("(max-width: 767px)").matches;

        cards.forEach(c => {
            const isActive = c.dataset.id === String(activeId);
            c.classList.toggle("is-active", isActive);

            const body = c.querySelector(".card-body");
            const back = c.querySelector(".back-body");
            const badgeLeft = c.querySelector(".badge-left");
            const badgeRight = c.querySelector(".badge-right");

            if (mobile) {
                if (body) body.style.display = "block";
                if (back) back.style.display = "none";
                if (badgeLeft) badgeLeft.style.display = "flex";
                if (badgeRight) badgeRight.style.display = "none";
                return;
            }

            if (body) body.style.display = isActive ? "block" : "none";
            if (back) back.style.display = isActive ? "none" : "flex";

            if (badgeLeft) badgeLeft.style.display = isActive ? "flex" : "none";
            if (badgeRight) badgeRight.style.display = isActive ? "none" : "flex";
        });

        if (!mobile && activeMedia) {
            activeMedia.src = IMG_MAP[String(activeId)] || IMG_MAP["1"];
            const activeInner = document.querySelector(`.stack-card[data-id="${activeId}"] > div`);
            if (activeInner) activeInner.appendChild(activeMedia);
        }
    }

    function rotateToTop(id) {
        const isMobile = window.matchMedia("(max-width: 767px)").matches;
        if (isMobile) return;

        const index = order.indexOf(String(id));
        order = [...order.slice(index), ...order.slice(0, index)];
        layout();
    }

    cards.forEach(card => card.addEventListener("click", () => rotateToTop(card.dataset.id)));

    function layout() {
        const isMobile = window.matchMedia("(max-width: 767px)").matches;

        if (isMobile) {
            stack.style.height = "auto";
            cards.forEach((card) => {
                card.style.position = "relative";
                card.style.transform = "none";
                card.style.width = "100%";
                card.style.height = "auto";
                card.style.marginBottom = "16px";
                card.style.zIndex = "auto";
                card.style.boxShadow = "none";
            });
            activeMedia.classList.add("hidden");
            setActiveOnly(order[0]);
            return;
        }

        stack.style.height = "400px";
        activeMedia.classList.remove("hidden");

        [...order].reverse().forEach(id => {
            const card = document.querySelector(`.stack-card[data-id="${id}"]`);
            const pos = order.indexOf(id);
            const isTop = pos === 0;

            card.style.position = "absolute";
            card.style.left = "0";
            card.style.top = "0";
            card.style.width = "100%";
            card.style.height = "100%";

            card.style.zIndex = 100 - pos;
            card.style.transform = `translateX(calc(${pos} * var(--peek)))`;
            card.style.boxShadow = isTop ? shadowStack : "none";
        });

        setActiveOnly(order[0]);
    }

    window.addEventListener("resize", layout);
    layout();
</script>

</html>