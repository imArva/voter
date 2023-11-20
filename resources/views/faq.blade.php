@extends ('layouts.user')

@section('faq')
    <section class="bg-tertiary h-screen">
        <div class="container px-6 py-10 mx-auto bg-repeat-round">
            <div class="p-2 rounded">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 p-4 text-sm">
                        <div class="inset-x-0 top-0 left-0">
                            <div class="text-3xl text-pr mb-8">Frequently asked questions.</div>
                            <div class="text-xs text-gray-600">See our FAQ for more details</div>

                        </div>
                    </div>
                    <div class="md:w-2/3">
                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                            <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                <h4 :class="{ 'text-primary font-medium': isOpen == true }">Apa itu Voter?</h4>
                                <svg :class="{ 'transform rotate-180': isOpen == true }" class="w-5 h-5 text-gray-500"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                :class="{ 'text-gray-600': isOpen == true }">
                                <p>Voter adalah platform website yang digunakan untuk pemungutan suara dalam pemilihan
                                </p>
                            </div>
                        </div>

                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                            <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                <h4 :class="{ 'text-primary font-medium': isOpen == true }">Bagaimana cara saya menggunakan
                                    Voter ?</h4>
                                <svg :class="{ 'transform rotate-180': isOpen == true }" class="w-5 h-5 text-gray-500"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                :class="{ 'text-gray-600': isOpen == true }">
                                <p>Untuk menggunakan Voter, Anda perlu mengunjungi situs web dan mengikuti petunjuk yang
                                    diberikan.Anda akan diminta untuk membuat akun atau login, memilih pilihan
                                    Anda, dan memberikan suara.</p>
                            </div>
                        </div>

                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                            <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                <h4 :class="{ 'text-primary font-medium': isOpen == true }">Apakah saya perlu membuat akun
                                    untuk menggunakan Voter ?</h4>
                                <svg :class="{ 'transform rotate-180': isOpen == true }" class="w-5 h-5 text-gray-500"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                :class="{ 'text-gray-600': isOpen == true }">
                                <p>Ya, Anda perlu membuat akun atau login untuk menggunakan Voter. Ini membantu dalam
                                    verifikasi identitas pengguna dan mencegah penyalahgunaan.</p>
                            </div>
                        </div>

                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                            <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                                <h4 :class="{ 'text-primary font-medium': isOpen == true }">Bagaiman saya bisa mendapatkan
                                    akun ?</h4>
                                <svg :class="{ 'transform rotate-180': isOpen == true }" class="w-5 h-5 text-gray-500"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                :class="{ 'text-gray-600': isOpen == true }">
                                <p>Untuk mendapatkan akun di website kami, silakan mengikuti prosedur berikut: Karena
                                    website kami masih dalam pengembangan, kami saat ini menerima permintaan akun secara
                                    manual. Anda dapat menghubungi kami melalui [email] kami untuk
                                    meminta akun.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="alpine-devtools" x-data="devtools()" x-show="alpines.length" x-init="start()">
        </div>
        <script>
            function scrollHandler(element = null) {
                return {
                    height: 0,
                    element: element,
                    calculateHeight(position) {
                        const distanceFromTop = this.element.offsetTop
                        const contentHeight = this.element.clientHeight
                        const visibleContent = contentHeight - window.innerHeight
                        const start = Math.max(0, position - distanceFromTop)
                        const percent = (start / visibleContent) * 100;
                        requestAnimationFrame(() => {
                            this.height = percent;
                        });
                    },
                    init() {
                        this.element = this.element || document.body;
                        this.calculateHeight(window.scrollY);
                    }
                };
            }
        </script>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
@endsection
