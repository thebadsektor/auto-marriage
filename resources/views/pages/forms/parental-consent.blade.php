<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Parental Consent</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light">
                            Action
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store-parental-consent') }}">
                        @csrf
                        <div class="table-responsive">
                            <table class="table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="20"> <h5>MUNICIPAL FORM NO. 92</h5>
                                            <h4 class="text-center"> (FORM NO. 6)</h4>
                                            <h1 class="text-center "> CONSENT TO MARRIAGE OF A PERSON UNDER AGE</h1>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="20">
                                            <p>City or Municipality of <input type="text" name="municipality"> Province of  <input type="text" name="province"></p>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <p>I, <input type="text" name="name">, resident of
                                                <input type="text" name="address">, and <select name="month">
                                                <option value="01">Father</option>
                                                <option value="02">Mother</option>
                                                <option value="03">Person in charge</option>
                                            </select> of <input type="text" name="name2">, resident of  <input type="text" name="address2">, single and less than {twenty, eighteen} years of age, being duly sworn, do hereby depose and say that I freely consent  to said <input type="text" name="name3">, marrying with <input type="text" name="name4">, resident of ______________________, and that I know of no legal impediment to such marriage.</p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <p class="text-center">      ____________________________________</p>
                                            <p class="text-center">     (Signature of mother, father or guardian)</p>

                                            <p>WITNESSES – (Not necessary if this affidavit is subscribed before the Local Civil Registrar concerned.)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <h2 class="text-center"> INSTRUCTIONS   </h2>
                                            <p> In case either both the contracting parties, being single, or less than twenty years of age as regards the male and less than eighteen years as regards the female, they shall exhibit to the Local Civil Registrar concerned the consent to their marriage of their father, mother, or guardian, or person having legal charge of them, in the order mentioned. Such consent shall be in writing under oath taken with the appearance of the interested parties before the Local Civil Registrar concerned or in the form of an affidavit made in the presence of two witnesses and attested before any official authorized by the law to administer oaths. (Rep. Act 386, Art. 61.)  </p>
                                            <p> For the purposes of the Marriage Law, by "guardian" is meant a guardian legally appointed by will or by a competent court fot the person, or both the person and estate, of a minor. By "person having legal charge" is meant a person actually in lawful charge of a minor who has no father nor mother, nor legal guardian. </p>
                                            <p>*Cross out unnecessary words</p>
                                            <p> 048354</p>
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
