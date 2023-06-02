@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{-- <script>
        function onSubmit(token) {
          document.getElementById("start-project-form").submit();
        }
    </script> --}}
@endpush

<div class="py-24 bg-white sm:py-32" id="contact">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
        <div class="max-w-2xl mx-auto lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Start a project</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">
                Do you want to work together? Leave a note here, and we'll get back to you as soon as possible.
            </p>
        </div>
        <div class="max-w-2xl mx-auto mt-16 sm:mt-20 lg:mt-24 lg:max-w-none">
            <form action="https://fieldgoal.io/f/jMwfNf" method="POST" class="max-w-4xl mx-auto" id="start-project-form">
                <div class="space-y-12">
                    <div class="pb-12 border-b border-gray-900/10">
                        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <x-form.label for="name" value="Name" required />
                                <x-form.input name="name" id="name" type="text" class="mt-2" required />
                            </div>
                    
                            <div class="sm:col-span-4">
                                <x-form.label for="company" value="Company or Organization" />
                                <x-form.input name="company" id="company" type="text" class="mt-2" />
                            </div>
                    
                            <div class="sm:col-span-3">
                                <x-form.label for="email" value="Email address" required />
                                <x-form.input id="email" name="email" type="email" class="mt-2" required />
                            </div>
                    
                            <div class="sm:col-span-3">
                                <x-form.label for="phone" value="Phone number" />
                                <x-form.input id="phone" name="phone" type="tel" class="mt-2" />
                            </div>

                            <div class="col-span-full">
                                <x-form.label for="message" value="Here's the fun part! Tell us about your business and your project." required />
                                <x-form.textarea id="message" name="message" rows="10" class="mt-2" required />
                                <x-form.hint value="What do you do? Who do you do it for? What is the project you're looking to get started?" class="mt-3" />
                            </div>

                            <div class="sm:col-span-3">
                                <x-form.label for="timeline" value="When do you need to get this launched?" />
                                <x-form.select
                                    id="timeline"
                                    name="timeline"
                                    :options="[
                                        'relaxed' => 'No particular timeline',
                                        'rush' => 'Less than 3 months (rush fees apply)',
                                        'standard' => '3 to 5 months from now'
                                    ]"
                                    class="mt-2" />
                            </div>
                    
                            <div class="col-span-full">
                                <x-form.label for="referrer" value="Where did you first hear about or find us?" />
                                <x-form.input name="referrer" id="referrer" type="text" class="mt-2" />
                            </div>

                            <div class="col-span-full">
                                <x-form.label for="seo-interested" value="Are you concerned about your site's ranking in search engines?" />
                                <x-form.radio-group legend="SEO Services" name="seo-interested" :options="[
                                    'yes' => 'Yes',
                                    'no' => 'No',
                                    'maybe' => 'Maybe',
                                ]" required />
                            </div>

                            <div class="sm:col-span-4">
                                <x-form.label for="budget" value="What did you expect to spend on your project?" required />
                                <x-form.input type="text" name="budget" id="budget" class="mt-2" required />
                                <x-form.hint value="Typical website costs start at $5,000-$7,000+ depending on the bells and whistles." class="mt-3" />
                            </div>

                            <div class="col-span-full">
                                <x-form.label for="other-interests" value="I'm also interested in help with:" />
                                <x-form.checkbox-group
                                    legend="Additional Services"
                                    name="other-services"
                                    :options="[
                                        'brand-design' => 'Logo and brand design',
                                        'copywriting' => 'Copywriting for the website',
                                        'graphic-design' => 'Print or graphic design of other materials'
                                    ]"
                                    class="mt-4" />
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6 gap-x-6">
                        <button type="submit" data-callback="grecaptcha.execute();" class="rounded-md bg-mojave-500 px-3.5 py-2.5 text-sm font-semibold uppercase transition-colors duration-200 text-white shadow-sm hover:bg-mojave-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-mojave-500">
                            Let's get started
                        </button>
                    </div>
                    <div class="g-recaptcha"
                        data-sitekey="6Lf8110mAAAAAHPWGz_j3SBiu8MH0xavIstdxjmf"
                        data-callback="onSubmit"
                        data-size="invisible">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>