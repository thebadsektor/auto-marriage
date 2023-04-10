<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <form id="form-process-form" method="POST" action="{{ route('process-parental-advice') }}" class="w-100">
                        @csrf
                        <div class="w-100 d-flex align-items-center">
                            <h3 class="card-title fw-bold text-nowrap">Parental Consent</h3><input class="form-control h-30px fw-normal d-inline-block" type="text" id="form_id" name="form_id" style="background-color: #F2F0F0; width: 60px; margin-left: 4px; margin-right: 4px" disabled>
                            <button class="btn btn-sm btn-secondary d-flex justify-content-center align-items-center" style="font-size: 11px; height: 30px; width: 50px;">Clear</button>
                            <div class="w-100 card-toolbar justify-content-end">
                                <button type="button" class="btn btn-sm btn-light">
                                    Action
                                </button>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <h5>MUNICIPAL FORM NO. 92</h5>
                                            <h4 class="text-center"> (FORM NO. 6)</h4>
                                            <h1 class="text-center "> CONSENT TO MARRIAGE OF A PERSON UNDER AGE</h1>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5 d-flex flex-column gap-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">City or Municipality of</div>
                                                <input class="form-control h-30px fw-normal" type="text" name="municipality" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">Province of</div>
                                                <input class="form-control h-30px fw-normal" type="text" name="province" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <div>I, <input class="form-control h-30px fw-normal d-inline-block" type="text" name="name" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, resident of
                                                <input class="form-control h-30px fw-normal d-inline-block" type="text" name="address" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, and 
                                                <select class="form-control h-30px fw-normal d-inline-block py-1" name="guardian" style="background-color: #F2F0F0; width: 140px; margin-left: 4px; margin-right: 4px">
                                                    <option value="01">Father</option>
                                                    <option value="02">Mother</option>
                                                    <option value="03">Person in charge</option>
                                                </select> of <input class="form-control h-30px fw-normal d-inline-block" type="text" name="name2" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, resident of <input class="form-control h-30px fw-normal d-inline-block" type="text" name="address2"
                                                    style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, single and less than {twenty, eighteen} years of age, being duly sworn, do hereby depose and say that I freely
                                                consent to said <input class="form-control h-30px fw-normal d-inline-block" type="text" name="name3" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px; margin-top: 8px;">, marrying with <input class="form-control h-30px fw-normal d-inline-block" type="text" name="name4"
                                                    style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, resident of
                                                    <input class="form-control h-30px fw-normal d-inline-block" type="text" name="address3" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, and that I know of no legal impediment to such marriage.
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of mother, father or guardian)</p>
                                            <p>WITNESSES - (Not necessary if this affidavit is subscribed before the Local Civil Registrar concerned.)</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <h2 class="text-center"> INSTRUCTIONS </h2>
                                            <p> In case either both the contracting parties, being single, or less than twenty years of age as regards the male and less than eighteen years as regards the female, they shall exhibit to the Local Civil Registrar concerned the consent to their marriage of their father, mother, or guardian, or person having legal charge of them, in the order mentioned.
                                                Such consent shall be in writing under oath taken with the appearance of the interested parties before the Local Civil Registrar concerned or in the form of an affidavit made in the presence of two witnesses and attested before any official authorized by the law to administer oaths. (Rep. Act 386, Art. 61.) </p>
                                            <p> For the purposes of the Marriage Law, by "guardian" is meant a guardian legally appointed by will or by a competent court fot the person, or both the person and estate, of a minor. By "person having legal charge" is meant a person actually in lawful charge of a minor who has no father nor mother, nor legal guardian. </p>
                                            <p>*Cross out unnecessary words</p>
                                            <p> 048354</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
