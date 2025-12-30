<footer class="px-5 py-12.5 w-full overflow-hidden">
    <div class='container mx-auto'>
        <div class="bg-[#FFF5F0] md:px-13.75 px-8 md:py-20 py-14 rounded-4xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-10 lg:gap-8 gap-8">
                <div>
                    <img src='./assets/images/occams-ai.svg' class='lg:h-12 h-10' alt='Occams Ai' />

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
                            <a href='/who-we-are' class="text-base leading-[1.8]">
                                Who we are
                            </a>

                            <ul class="mt-1 ml-7 list-disc text-[#52525B]">
                                <li class="text-base leading-[1.8]">
                                    <a href='/brand-story'>Brand Story</a>
                                </li>

                                <li class="text-base leading-[1.8]">
                                    <a href='/researchers'>Researchers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="text-[#52525B]">
                            <a href='/our-services' class="text-base leading-[1.8]">
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
                            <a href='/insights' class="text-base leading-[1.8]">Insights</a>
                        </li>

                        <li class="text-[#52525B]">
                            <a href='/career' class="text-base leading-[1.8]">Career</a>
                        </li>

                        <li class="text-[#52525B]">
                            <a href='/contact' class="text-base leading-[1.8]">Contact</a>
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
                    <a href="/contact">Contact</a>
                    <a href="/privacy-policy">Privacy policy</a>
                    <a href="/sitemap">Sitemap</a>
                    <a href="/terms-conditions">Terms of Use</a>
                </div>

                <p class="text-base leading-[1.8] text-[#52525B]">
                    © 2025, All Rights Reserved
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
    const CARDS = [
        {
            id: 1, number: "1",
            title: "SIMPLICITY AS A FORM OF INTELLIGENCE",
            desc: "A system is only useful when people can understand it. We design intelligence that leaders can trust and teams can integrate into daily work without confusion. If a system cannot explain itself, it cannot guide decisions responsibly.",
            bgClass: "linear-background"
        },
        {
            id: 2, number: "2",
            title: "CLAIMS THAT CAN BE TRUSTED",
            desc: "We connect metrics to reality, making AI outputs verifiable and actionable for teams and operators.",
            bgClass: "linear-background-secondary"
        },
        {
            id: 3, number: "3",
            title: "SUPPORT HUMAN JUDGMENT",
            desc: "Systems should support people—not replace them—especially where context and accountability matter.",
            bgClass: "linear-background"
        },
        {
            id: 4, number: "4",
            title: "RELAXED, RELIABLE EXECUTION",
            desc: "Workflows that teams actually adopt, built for clarity and operational reality.",
            bgClass: "linear-background-secondary"
        },
    ];

    let order = [1, 2, 3, 4];

    function rotateToTop(arr, id) {
        const idx = arr.indexOf(id);
        if (idx === -1) return arr;
        return [...arr.slice(idx), ...arr.slice(0, idx)];
    }

    const stackEl = document.getElementById("stack");
    const cardEls = new Map();

    CARDS.forEach(card => {
        const el = document.createElement("div");
        el.className = `stack-card`;
        el.dataset.id = card.id;

        el.innerHTML = `
  <div class="relative h-full w-full rounded-[28px] overflow-hidden ${card.bgClass}">
    
    <!-- number always visible -->
    <div class="badge">${card.number}</div>

    <!-- content (only active card) -->
    <div class="card-body h-full p-6 sm:p-7 text-white">
      <h3 class="text-xl sm:text-2xl font-extrabold uppercase leading-tight max-w-[520px]">
        ${card.title}
      </h3>
      <p class="mt-3 text-sm sm:text-[15px] leading-[1.75] text-white/85 max-w-[640px]">
        ${card.desc}
      </p>
    </div>

    <!-- decorative waves / circles -->
    <div class="pointer-events-none absolute inset-0 opacity-20">
      <div class="absolute -right-10 -bottom-10 h-48 w-48 rounded-full border border-white/40"></div>
      <div class="absolute -right-16 -bottom-16 h-56 w-56 rounded-full border border-white/30"></div>
    </div>

  </div>
`;


        el.addEventListener("click", () => {
            order = rotateToTop(order, card.id);
            layout();
        });

        cardEls.set(card.id, el);
        stackEl.appendChild(el);
    });

    function layout() {
        [...order].reverse().forEach(id => {
            const pos = order.indexOf(id);
            const el = cardEls.get(id);
            const isTop = pos === 0;

            el.classList.toggle("is-active", isTop);

            el.style.zIndex = String(100 - pos);
            el.style.boxShadow = isTop
                ? "shadow-stack"
                : "";

            el.style.transform = `translateX(calc(${pos} * var(--peek))) translateY(0px)`;
        });
    }

    layout();
</script>

</html>