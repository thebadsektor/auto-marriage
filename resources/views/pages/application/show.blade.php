<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">
                        <a style="margin-right: 1rem" href="{{ route('applications') }}">
                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-26-051612/core/html/src/media/icons/duotune/arrows/arr079.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor"/>
                                <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor"/>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        {{ $application->registry_no }}
                    </h3>
                    <div class="card-toolbar">
                        <a href="/application/show-form/{{ $application->id }}" class="btn btn-sm btn-secondary">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                                </svg>
                                View Application Form
                            </span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="GET" action="/application/edit/{{ $application->id }}">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Registry No.</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ ucfirst(trans($application->registry_no)) }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Groom </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    @foreach ($application->applicants as $applicant)
                                        @if($applicant->id == $application->groom_id)
                                            <a href="/applicant/show/{{$applicant->id}}">
                                                {{ $applicant->firstname . ' ' . $applicant->lastname }}
                                            </a>
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Bride </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    @foreach ($application->applicants as $applicant)
                                        @if($applicant->id == $application->bride_id)
                                            <a href="/applicant/show/{{$applicant->id}}">
                                                {{ $applicant->firstname . ' ' . $applicant->lastname }}
                                            </a>
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Province </p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ ucfirst(trans($application->province)) }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>City/Municipality </p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ ucfirst(trans($application->city)) }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Received by </p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ ucfirst(trans($application->rec_by)) }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Date of Receipt </p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ ucfirst(trans($application->receipt_date)) }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Marriage License No. </p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ ucfirst(trans($application->license_no)) }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Date of Issuance of Marriage License</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ ucfirst(trans($application->issuance_date)) }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Date Subscribed and Sworn</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $application->sworn_date }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Place Subscribed and Sworn</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $application->sworn_date }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Community Tax Certificate No.</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $application->ctc_no }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Community Tax Certificate No. Issued Date</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $application->ctc_date }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Community Tax Certificate No. Place Issued</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $application->ctc_place }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Expiration Date:</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ \Carbon\Carbon::parse($application->created_at)->addDays(120)->format('Y-m-d') }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Date Created</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $application->created_at }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <p>Date Updated</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $application->updated_at }}</p>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">Edit</button>
                            </div>
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
