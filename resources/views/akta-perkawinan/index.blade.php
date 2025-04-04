@section('title', 'Akta Perkawinan')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Akta Perkawinan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form method="post" action="#" class="space-y-6">
                    @csrf
                    @method('POST')

                    <div id="stepper-form">
                        <div id="step-1" class="step-content">
                            @include('akta-perkawinan.partials.data-suami-form')
                        </div>

                        <div id="step-2" class="step-content hidden">
                            @include('akta-perkawinan.partials.data-ayah-dari-suami-form')
                        </div>

                        <div id="step-3" class="step-content hidden">
                            @include('akta-perkawinan.partials.data-ibu-dari-suami-form')
                        </div>

                        <div id="step-4" class="step-content">
                            @include('akta-perkawinan.partials.data-istri-form')
                        </div>

                        <div id="step-5" class="step-content hidden">
                            @include('akta-perkawinan.partials.data-ayah-dari-istri-form')
                        </div>

                        <div id="step-6" class="step-content hidden">
                            @include('akta-perkawinan.partials.data-ibu-dari-istri-form')
                        </div>

                        <div id="step-7" class="step-content hidden">
                            @include('akta-perkawinan.partials.data-saksi-form')
                        </div>

                        <div id="step-8" class="step-content hidden">
                            @include('akta-perkawinan.partials.data-perkawinan-form')
                        </div>

                        <div id="step-9" class="step-content hidden">
                            @include('akta-perkawinan.partials.data-administrasi-form')
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <x-secondary-button id="prev-btn" type="button">{{ __('Previous') }}</x-secondary-button>
                        <x-primary-button id="next-btn" type="button">{{ __('Next') }}</x-primary-button>
                        <x-primary-button id="submit-btn" type="button">{{ __('Submit') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stepperForm = document.getElementById('stepper-form');
            const steps = document.querySelectorAll('.step-content');
            let currentStep = 0;
            const nextButton = document.getElementById('next-btn');
            const prevButton = document.getElementById('prev-btn');
            const submitButton = document.getElementById('submit-btn');

            // Function to show a specific step
            function showStep(stepIndex) {
                steps.forEach((step, index) => {
                    step.classList.add('hidden');
                    if (index === stepIndex) {
                        step.classList.remove('hidden');
                    }
                });

                // Update button visibility
                if (stepIndex === steps.length - 1) {
                    nextButton.classList.add('hidden');
                    submitButton.classList.remove('hidden');
                } else {
                    nextButton.classList.remove('hidden');
                    submitButton.classList.add('hidden');
                }

                if (stepIndex === 0) {
                    prevButton.classList.add('hidden');
                } else {
                    prevButton.classList.remove('hidden');
                }
            }

            // Next button handler
            nextButton.addEventListener('click', function() {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            // Previous button handler
            prevButton.addEventListener('click', function() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // Initialize the first step
            showStep(currentStep);
        });
    </script>

</x-app-layout>
