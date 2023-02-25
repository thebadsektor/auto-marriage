<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">
                        <a style="margin-right: 1rem" href="/applicant/show/{{ $applicant->id }}">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/arrows/arr079.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                                <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        {{ ucfirst(trans($applicant->lastname . ', '. $applicant->firstname)) }}
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
                    <form action="{{ route('update-applicant', $applicant->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="text"
                                    class="form-control @error('role') is-invalid @enderror" name="role"
                                    value="{{ $applicant->role }}" required autocomplete="role" autofocus>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text"
                                    class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                    value="{{ $applicant->firstname }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" firstname="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="middlename" class="col-md-4 col-form-label text-md-end">{{ __('Middlename') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text"
                                    class="form-control @error('middlename') is-invalid @enderror" name="middlename"
                                    value="{{ $applicant->middlename }}" required autocomplete="middlename" autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" middlename="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text"
                                    class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                    value="{{ $applicant->lastname }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" lastname="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birthdate') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date"
                                    class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                                    value="{{ $applicant->birthdate }}" required autocomplete="birthdate" autofocus>

                                @error('birthdate')
                                    <span class="invalid-feedback" birthdate="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sex" class="col-md-4 col-form-label text-md-end">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                                <input id="sex" type="text"
                                    class="form-control @error('sex') is-invalid @enderror" name="sex"
                                    value="{{ $applicant->sex }}" required autocomplete="sex" autofocus>

                                @error('sex')
                                    <span class="invalid-feedback" sex="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-end">{{ __('Citizenship') }}</label>

                            <div class="col-md-6">
                                <input id="citizenship" type="text"
                                    class="form-control @error('citizenship') is-invalid @enderror" name="citizenship"
                                    value="{{ $applicant->citizenship }}" required autocomplete="citizenship" autofocus>

                                @error('citizenship')
                                    <span class="invalid-feedback" citizenship="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="house_no" class="col-md-4 col-form-label text-md-end">{{ __('House No.') }}</label>

                            <div class="col-md-6">
                                <input id="house_no" type="text"
                                    class="form-control @error('house_no') is-invalid @enderror" name="house_no"
                                    value="{{ $applicant->house_no }}" required autocomplete="house_no" autofocus>

                                @error('house_no')
                                    <span class="invalid-feedback" house_no="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="street" class="col-md-4 col-form-label text-md-end">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text"
                                    class="form-control @error('street') is-invalid @enderror" name="street"
                                    value="{{ $applicant->street }}" required autocomplete="street" autofocus>

                                @error('street')
                                    <span class="invalid-feedback" street="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="barangay" class="col-md-4 col-form-label text-md-end">{{ __('Barangay') }}</label>

                            <div class="col-md-6">
                                <input id="barangay" type="text"
                                    class="form-control @error('barangay') is-invalid @enderror" name="barangay"
                                    value="{{ $applicant->barangay }}" required autocomplete="barangay" autofocus>

                                @error('barangay')
                                    <span class="invalid-feedback" barangay="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City/Municipality') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text"
                                    class="form-control @error('city') is-invalid @enderror" name="city"
                                    value="{{ $applicant->city }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" city="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="province" class="col-md-4 col-form-label text-md-end">{{ __('Province') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text"
                                    class="form-control @error('province') is-invalid @enderror" name="province"
                                    value="{{ $applicant->province }}" required autocomplete="province" autofocus>

                                @error('province')
                                    <span class="invalid-feedback" province="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text"
                                    class="form-control @error('country') is-invalid @enderror" name="country"
                                    value="{{ $applicant->country }}" required autocomplete="country" autofocus>

                                @error('country')
                                    <span class="invalid-feedback" country="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="religion" class="col-md-4 col-form-label text-md-end">{{ __('Religion') }}</label>

                            <div class="col-md-6">
                                <input id="religion" type="text"
                                    class="form-control @error('religion') is-invalid @enderror" name="religion"
                                    value="{{ $applicant->religion }}" required autocomplete="religion" autofocus>

                                @error('religion')
                                    <span class="invalid-feedback" religion="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="civil_status" class="col-md-4 col-form-label text-md-end">{{ __('Civil Status') }}</label>

                            <div class="col-md-6">
                                <input id="civil_status" type="text"
                                    class="form-control @error('civil_status') is-invalid @enderror" name="civil_status"
                                    value="{{ $applicant->civil_status }}" required autocomplete="civil_status" autofocus>

                                @error('civil_status')
                                    <span class="invalid-feedback" civil_status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dissolved_reason" class="col-md-4 col-form-label text-md-end">{{ __('If previously married: How was it dissolved?') }}</label>

                            <div class="col-md-6">
                                <input id="dissolved_reason" type="text"
                                    class="form-control @error('dissolved_reason') is-invalid @enderror" name="dissolved_reason"
                                    value="{{ $applicant->dissolved_reason }}" required autocomplete="dissolved_reason" autofocus>

                                @error('dissolved_reason')
                                    <span class="invalid-feedback" dissolved_reason="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dissolved_city" class="col-md-4 col-form-label text-md-end">{{ __('Dissolved City/Municipality') }}</label>

                            <div class="col-md-6">
                                <input id="dissolved_city" type="text"
                                    class="form-control @error('dissolved_city') is-invalid @enderror" name="dissolved_city"
                                    value="{{ $applicant->dissolved_city }}" required autocomplete="dissolved_city" autofocus>

                                @error('dissolved_city')
                                    <span class="invalid-feedback" dissolved_city="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dissolved_province" class="col-md-4 col-form-label text-md-end">{{ __('Dissolved Province') }}</label>

                            <div class="col-md-6">
                                <input id="dissolved_province" type="text"
                                    class="form-control @error('dissolved_province') is-invalid @enderror" name="dissolved_province"
                                    value="{{ $applicant->dissolved_province }}" required autocomplete="dissolved_province" autofocus>

                                @error('dissolved_province')
                                    <span class="invalid-feedback" dissolved_province="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dissolved_country" class="col-md-4 col-form-label text-md-end">{{ __('Dissolved Country') }}</label>

                            <div class="col-md-6">
                                <input id="dissolved_country" type="text"
                                    class="form-control @error('dissolved_country') is-invalid @enderror" name="dissolved_country"
                                    value="{{ $applicant->dissolved_country }}" required autocomplete="dissolved_country" autofocus>

                                @error('dissolved_country')
                                    <span class="invalid-feedback" dissolved_country="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dissolved_date" class="col-md-4 col-form-label text-md-end">{{ __('Dissolved Date') }}</label>

                            <div class="col-md-6">
                                <input id="dissolved_date" type="date"
                                    class="form-control @error('dissolved_date') is-invalid @enderror" name="dissolved_date"
                                    value="{{ $applicant->dissolved_date }}" required autocomplete="dissolved_date" autofocus>

                                @error('dissolved_date')
                                    <span class="invalid-feedback" dissolved_date="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="relationship_degree" class="col-md-4 col-form-label text-md-end">{{ __('Degree of relationship of contracting parties') }}</label>

                            <div class="col-md-6">
                                <input id="relationship_degree" type="text"
                                    class="form-control @error('relationship_degree') is-invalid @enderror" name="relationship_degree"
                                    value="{{ $applicant->relationship_degree }}" required autocomplete="relationship_degree" autofocus>

                                @error('relationship_degree')
                                    <span class="invalid-feedback" relationship_degree="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_firstname" class="col-md-4 col-form-label text-md-end">{{ __('Father Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="father_firstname" type="text"
                                    class="form-control @error('father_firstname') is-invalid @enderror" name="father_firstname"
                                    value="{{ $applicant->father_firstname }}" required autocomplete="father_firstname" autofocus>

                                @error('father_firstname')
                                    <span class="invalid-feedback" father_firstname="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_middlename" class="col-md-4 col-form-label text-md-end">{{ __('Father Middlename') }}</label>

                            <div class="col-md-6">
                                <input id="father_middlename" type="text"
                                    class="form-control @error('father_middlename') is-invalid @enderror" name="father_middlename"
                                    value="{{ $applicant->father_middlename }}" required autocomplete="father_middlename" autofocus>

                                @error('father_middlename')
                                    <span class="invalid-feedback" father_middlename="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_lastname" class="col-md-4 col-form-label text-md-end">{{ __('Father Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="father_lastname" type="text"
                                    class="form-control @error('father_lastname') is-invalid @enderror" name="father_lastname"
                                    value="{{ $applicant->father_lastname }}" required autocomplete="father_lastname" autofocus>

                                @error('father_lastname')
                                    <span class="invalid-feedback" father_lastname="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_citizenship" class="col-md-4 col-form-label text-md-end">{{ __(' Father Citizenship') }}</label>

                            <div class="col-md-6">
                                <input id="father_citizenship" type="text"
                                    class="form-control @error('father_citizenship') is-invalid @enderror" name="father_citizenship"
                                    value="{{ $applicant->father_citizenship }}" required autocomplete="father_citizenship" autofocus>

                                @error('father_citizenship')
                                    <span class="invalid-feedback" father_citizenship="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_house_no" class="col-md-4 col-form-label text-md-end">{{ __('Father House No.') }}</label>

                            <div class="col-md-6">
                                <input id="father_house_no" type="text"
                                    class="form-control @error('father_house_no') is-invalid @enderror" name="father_house_no"
                                    value="{{ $applicant->father_house_no }}" required autocomplete="father_house_no" autofocus>

                                @error('father_house_no')
                                    <span class="invalid-feedback" father_house_no="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_street" class="col-md-4 col-form-label text-md-end">{{ __('Father Street') }}</label>

                            <div class="col-md-6">
                                <input id="father_street" type="text"
                                    class="form-control @error('father_street') is-invalid @enderror" name="father_street"
                                    value="{{ $applicant->father_street }}" required autocomplete="father_street" autofocus>

                                @error('father_street')
                                    <span class="invalid-feedback" father_street="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_barangay" class="col-md-4 col-form-label text-md-end">{{ __('Father Barangay') }}</label>

                            <div class="col-md-6">
                                <input id="father_barangay" type="text"
                                    class="form-control @error('father_barangay') is-invalid @enderror" name="father_barangay"
                                    value="{{ $applicant->father_barangay }}" required autocomplete="father_barangay" autofocus>

                                @error('father_barangay')
                                    <span class="invalid-feedback" father_barangay="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_city" class="col-md-4 col-form-label text-md-end">{{ __('Father City/Municipality') }}</label>

                            <div class="col-md-6">
                                <input id="father_city" type="text"
                                    class="form-control @error('father_city') is-invalid @enderror" name="father_city"
                                    value="{{ $applicant->father_city }}" required autocomplete="father_city" autofocus>

                                @error('father_city')
                                    <span class="invalid-feedback" father_city="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_province" class="col-md-4 col-form-label text-md-end">{{ __('Father Province') }}</label>

                            <div class="col-md-6">
                                <input id="father_province" type="text"
                                    class="form-control @error('father_province') is-invalid @enderror" name="father_province"
                                    value="{{ $applicant->father_province }}" required autocomplete="father_province" autofocus>

                                @error('father_province')
                                    <span class="invalid-feedback" father_province="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_country" class="col-md-4 col-form-label text-md-end">{{ __('Father Country') }}</label>

                            <div class="col-md-6">
                                <input id="father_country" type="text"
                                    class="form-control @error('father_country') is-invalid @enderror" name="father_country"
                                    value="{{ $applicant->father_country }}" required autocomplete="father_country" autofocus>

                                @error('father_country')
                                    <span class="invalid-feedback" father_country="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_firstname" class="col-md-4 col-form-label text-md-end">{{ __('Mother Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="mother_firstname" type="text"
                                    class="form-control @error('mother_firstname') is-invalid @enderror" name="mother_firstname"
                                    value="{{ $applicant->mother_firstname }}" required autocomplete="mother_firstname" autofocus>

                                @error('mother_firstname')
                                    <span class="invalid-feedback" mother_firstname="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_middlename" class="col-md-4 col-form-label text-md-end">{{ __('Mother Middlename') }}</label>

                            <div class="col-md-6">
                                <input id="mother_middlename" type="text"
                                    class="form-control @error('mother_middlename') is-invalid @enderror" name="mother_middlename"
                                    value="{{ $applicant->mother_middlename }}" required autocomplete="mother_middlename" autofocus>

                                @error('mother_middlename')
                                    <span class="invalid-feedback" mother_middlename="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_lastname" class="col-md-4 col-form-label text-md-end">{{ __('Mother Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="mother_lastname" type="text"
                                    class="form-control @error('mother_lastname') is-invalid @enderror" name="mother_lastname"
                                    value="{{ $applicant->mother_lastname }}" required autocomplete="mother_lastname" autofocus>

                                @error('mother_lastname')
                                    <span class="invalid-feedback" mother_lastname="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_citizenship" class="col-md-4 col-form-label text-md-end">{{ __(' Mother Citizenship') }}</label>

                            <div class="col-md-6">
                                <input id="mother_citizenship" type="text"
                                    class="form-control @error('mother_citizenship') is-invalid @enderror" name="mother_citizenship"
                                    value="{{ $applicant->mother_citizenship }}" required autocomplete="mother_citizenship" autofocus>

                                @error('mother_citizenship')
                                    <span class="invalid-feedback" mother_citizenship="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_house_no" class="col-md-4 col-form-label text-md-end">{{ __('Mother House No.') }}</label>

                            <div class="col-md-6">
                                <input id="mother_house_no" type="text"
                                    class="form-control @error('mother_house_no') is-invalid @enderror" name="mother_house_no"
                                    value="{{ $applicant->mother_house_no }}" required autocomplete="mother_house_no" autofocus>

                                @error('mother_house_no')
                                    <span class="invalid-feedback" mother_house_no="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_street" class="col-md-4 col-form-label text-md-end">{{ __('Mother Street') }}</label>

                            <div class="col-md-6">
                                <input id="mother_street" type="text"
                                    class="form-control @error('mother_street') is-invalid @enderror" name="mother_street"
                                    value="{{ $applicant->mother_street }}" required autocomplete="mother_street" autofocus>

                                @error('mother_street')
                                    <span class="invalid-feedback" mother_street="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_barangay" class="col-md-4 col-form-label text-md-end">{{ __('Mother Barangay') }}</label>

                            <div class="col-md-6">
                                <input id="mother_barangay" type="text"
                                    class="form-control @error('mother_barangay') is-invalid @enderror" name="mother_barangay"
                                    value="{{ $applicant->mother_barangay }}" required autocomplete="mother_barangay" autofocus>

                                @error('mother_barangay')
                                    <span class="invalid-feedback" mother_barangay="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_city" class="col-md-4 col-form-label text-md-end">{{ __('Mother City/Municipality') }}</label>

                            <div class="col-md-6">
                                <input id="mother_city" type="text"
                                    class="form-control @error('mother_city') is-invalid @enderror" name="mother_city"
                                    value="{{ $applicant->mother_city }}" required autocomplete="mother_city" autofocus>

                                @error('mother_city')
                                    <span class="invalid-feedback" mother_city="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_province" class="col-md-4 col-form-label text-md-end">{{ __('Mother Province') }}</label>

                            <div class="col-md-6">
                                <input id="mother_province" type="text"
                                    class="form-control @error('mother_province') is-invalid @enderror" name="mother_province"
                                    value="{{ $applicant->mother_province }}" required autocomplete="mother_province" autofocus>

                                @error('mother_province')
                                    <span class="invalid-feedback" mother_province="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_country" class="col-md-4 col-form-label text-md-end">{{ __('Mother Country') }}</label>

                            <div class="col-md-6">
                                <input id="mother_country" type="text"
                                    class="form-control @error('mother_country') is-invalid @enderror" name="mother_country"
                                    value="{{ $applicant->mother_country }}" required autocomplete="mother_country" autofocus>

                                @error('mother_country')
                                    <span class="invalid-feedback" mother_country="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person" class="col-md-4 col-form-label text-md-end">{{ __('Persons who gave consent or advice') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person" type="text"
                                    class="form-control @error('consenting_person') is-invalid @enderror" name="consenting_person"
                                    value="{{ $applicant->consenting_person }}" required autocomplete="consenting_person" autofocus>

                                @error('consenting_person')
                                    <span class="invalid-feedback" consenting_person="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person_relationship" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person Relationship') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_relationship" type="text"
                                    class="form-control @error('consenting_person_relationship') is-invalid @enderror" name="consenting_person_relationship"
                                    value="{{ $applicant->consenting_person_relationship }}" required autocomplete="consenting_person_relationship" autofocus>

                                @error('consenting_person_relationship')
                                    <span class="invalid-feedback" consenting_person_relationship="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person_citizenship" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person Citizenship') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_citizenship" type="text"
                                    class="form-control @error('consenting_person_citizenship') is-invalid @enderror" name="consenting_person_citizenship"
                                    value="{{ $applicant->consenting_person_citizenship }}" required autocomplete="consenting_person_citizenship" autofocus>

                                @error('consenting_person_citizenship')
                                    <span class="invalid-feedback" consenting_person_citizenship="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_house_no" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person House No.') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_house_no" type="text"
                                    class="form-control @error('consenting_person_house_no') is-invalid @enderror" name="consenting_person_house_no"
                                    value="{{ $applicant->consenting_person_house_no }}" required autocomplete="consenting_person_house_no" autofocus>

                                @error('consenting_person_house_no')
                                    <span class="invalid-feedback" consenting_person_house_no="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person_street" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person Street') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_street" type="text"
                                    class="form-control @error('consenting_person_street') is-invalid @enderror" name="consenting_person_street"
                                    value="{{ $applicant->consenting_person_street }}" required autocomplete="consenting_person_street" autofocus>

                                @error('consenting_person_street')
                                    <span class="invalid-feedback" consenting_person_street="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person_barangay" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person Barangay') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_barangay" type="text"
                                    class="form-control @error('consenting_person_barangay') is-invalid @enderror" name="consenting_person_barangay"
                                    value="{{ $applicant->consenting_person_barangay }}" required autocomplete="consenting_person_barangay" autofocus>

                                @error('consenting_person_barangay')
                                    <span class="invalid-feedback" consenting_person_barangay="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person_city" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person City/Municipality') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_city" type="text"
                                    class="form-control @error('mother_city') is-invalid @enderror" name="consenting_person_city"
                                    value="{{ $applicant->consenting_person_city }}" required autocomplete="consenting_person_city" autofocus>

                                @error('consenting_person_city')
                                    <span class="invalid-feedback" consenting_person_city="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person_province" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person Province') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_province" type="text"
                                    class="form-control @error('consenting_person_province') is-invalid @enderror" name="consenting_person_province"
                                    value="{{ $applicant->consenting_person_province }}" required autocomplete="consenting_person_province" autofocus>

                                @error('consenting_person_province')
                                    <span class="invalid-feedback" consenting_person_province="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="consenting_person_country" class="col-md-4 col-form-label text-md-end">{{ __('Consenting Person Country') }}</label>

                            <div class="col-md-6">
                                <input id="consenting_person_country" type="text"
                                    class="form-control @error('consenting_person_country') is-invalid @enderror" name="consenting_person_country"
                                    value="{{ $applicant->consenting_person_country }}" required autocomplete="consenting_person_country" autofocus>

                                @error('consenting_person_country')
                                    <span class="invalid-feedback" consenting_person_country="alert">
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
                    <form action="{{ route('destroy-applicant', $applicant->id) }}" method="POST">
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
