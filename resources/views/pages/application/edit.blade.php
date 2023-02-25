<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">
                        <a style="margin-right: 1rem" href="/application/show/{{ $application->id }}">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/arrows/arr079.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                                <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        {{ $application->registry_no }}
                    </h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                        rx="10" fill="currentColor" />
                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                        transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('update-application', $application->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="registry_no" class="col-md-4 col-form-label text-md-end">{{ __('Registry No.') }}</label>

                            <div class="col-md-6">
                                <input id="registry_no" type="text"
                                    class="form-control @error('registry_no') is-invalid @enderror" name="registry_no"
                                    value="{{ $application->registry_no }}" required autocomplete="registry_no" autofocus>
                                @error('registry_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="groom_id"class="col-md-4 col-form-label text-md-end">{{ __('Groom') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select the groom" name="groom_id" id="groom_id">
                                    @foreach ($grooms as $groom)
                                        <option value="{{$groom->id}}">{{$groom->lastname  .', '. $groom->firstname}}</option>
                                    @endforeach
                                </select>

                                @error('groom_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="bride_id" class="col-md-4 col-form-label text-md-end">{{ __('Bride') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Select the bride" name="bride_id" id="bride_id">
                                    @foreach ($brides as $bride)
                                        <option value="{{$bride->id}}">{{$bride->lastname  .', '. $bride->firstname}}</option>
                                    @endforeach
                                </select>

                                @error('bride')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="province"
                                class="col-md-4 col-form-label text-md-end">{{ __('Province') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text"
                                    class="form-control @error('province') is-invalid @enderror" name="province"
                                    value="{{ $application->province }}" required autocomplete="province" autofocus>

                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="city"
                                class="col-md-4 col-form-label text-md-end">{{ __('City/Municipality') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text"
                                    class="form-control @error('city') is-invalid @enderror" name="city"
                                    value="{{ $application->city }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rec_by"
                                class="col-md-4 col-form-label text-md-end">{{ __('Received by') }}</label>

                            <div class="col-md-6">
                                <input id="rec_by" type="text"
                                    class="form-control @error('rec_by') is-invalid @enderror" name="rec_by"
                                    value="{{ $application->rec_by }}" required autocomplete="rec_by" autofocus>

                                @error('rec_by')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="receipt_date"
                                class="col-md-4 col-form-label text-md-end">{{ __('Date of Receipt') }}</label>

                            <div class="col-md-6">
                                <input id="receipt_date" type="date"
                                    class="form-control @error('receipt_date') is-invalid @enderror" name="receipt_date"
                                    value="{{ $application->receipt_date }}" required autocomplete="receipt_date" autofocus>

                                @error('receipt_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="license_no"
                                class="col-md-4 col-form-label text-md-end">{{ __('Marriage License No.') }}</label>

                            <div class="col-md-6">
                                <input id="license_no" type="text"
                                    class="form-control @error('license_no') is-invalid @enderror" name="license_no"
                                    value="{{ $application->license_no }}" required autocomplete="license_no" autofocus>

                                @error('license_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="issuance_date"
                                class="col-md-4 col-form-label text-md-end">{{ __('Date of Issuance of Marriage License') }}</label>

                            <div class="col-md-6">
                                <input id="issuance_date" type="date"
                                    class="form-control @error('issuance_date') is-invalid @enderror" name="issuance_date"
                                    value="{{ $application->issuance_date }}" required autocomplete="issuance_date" autofocus>

                                @error('issuance_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="row mb-0">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('destroy-application', $application->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Delete</button>
                    </form>
                </div>
                <div class="card-footer">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>

</x-base-layout>
