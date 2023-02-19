<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Applications</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light">
                            Action
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <form method="post" id="browse_applications" action="{{ route('batch-destroy-applications') }}">
                            @csrf
                            <thead>
                                <tr>
                                    <td colspan="20">Municipal Form 90 (Form No. 2) (To be accomplished in quadruplicate using black ink)
                                        <br> (Revised January 2007)
                                        <br>
                                        <p class="text-center"> Republic of the Philippines </p> 
                                        <p class="text-center"> OFFICE OF THE CIVIL REGISTRAR GENERAL</p>
                                        <p class="text-center"> APPLICATION FOR MARRIAGE LICENSE</p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="10">Province</td>
                                    <td colspan="10" rowspan="2">Registry No.</td>
                                </tr>
                                <tr>
                                    <td colspan="10">City/Municipality</td>
                                    <td colspan="10"></td>
                                </tr>
                                <tr>
                                    <td colspan="10">Received by</td>
                                    <td colspan="10">Marriage License No.</td>
                                </tr>
                                <tr>
                                    <td colspan="10">Date of Receipt</td>
                                    <td colspan="10">Date of Issuance of Marriage License</td>
                                </tr>
                                <tr>
                                    <td colspan="10">GROOM</td>
                                    <td colspan="10">BRIDE</td>
                                </tr>
                                <tr>
                                    <td colspan="10">The Civil Registrar
                                        <br> Sir/Madam:
                                        <br>May I apply for a license to contract marriage with_____________________and to this effect, being duly sworn, I hereby depose and say that I have all the necessary qualifications and non of the   legal disqualifications to contract the said marriage, and that the following data are true and correct to the best of my knowledge and information:
                                    </td>
                                    <td colspan="10">The Civil Registrar
                                        <br> Sir/Madam:
                                        <br>May I apply for a license to contract marriage with_____________________and to this effect, being duly sworn, I hereby depose and say that I have all the necessary qualifications and non of the   legal disqualifications to contract the said marriage, and that the following data are true and correct to the best of my knowledge and information:
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">(First)</td>
                                    <td colspan="4" rowspan="3">1. Name of Applicant </td>
                                    <td colspan="8">(First)</td>
                                </tr>
                                <tr>
                                    <td colspan="8">(Middle)</td>
                                    <td colspan="4"></td>
                                    <td colspan="8">(Middle)</td>
                                </tr>
                                <tr>
                                    <td colspan="8">(Last)</td>
                                    <td colspan="4"> </td>
                                    <td colspan="8">(Last)</td>
                                </tr>
                                <tr>
                                    <td colspan="2">(Day)</td>
                                    <td colspan="2">(Month)</td>
                                    <td colspan="2">(Year)</td>
                                    <td colspan="2">(Age)</td>
                                    <td colspan="4">2. Date of Birth/Age</td>
                                    <td colspan="2">(Day)</td>
                                    <td colspan="2">(Month)</td>
                                    <td colspan="2">(Year)</td>
                                    <td colspan="2">(Age)</td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="3">(City/Municipality)</td>
                                    <td colspan="3">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                    <td colspan="4">3. Place of Birth</td>
                                    <td colspan="3">(City/Municipality)</td>
                                    <td colspan="3">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                </tr>
                                <tr>
                                    <td colspan="4">(Male/Female)</td>
                                    <td colspan="4">(Citizenship)</td>
                                    <td colspan="4">4. Sex/Citizenship </td>
                                    <td colspan="4">(Male/Female)</td>
                                    <td colspan="4">(Citizenship)</td>
                                </tr>
                                <tr>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                    <td colspan="4">5. Residence </td>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">6. Religion/Religious Sect </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">7. Civil Status </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">8. If previously married: How was it dissolved? </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">(City/Municipality)</td>
                                    <td colspan="3">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                    <td colspan="4">9. Place where dissolved?</td>
                                    <td colspan="3">(City/Municipality)</td>
                                    <td colspan="3">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(Day)</td>
                                    <td colspan="3">(Month)</td>
                                    <td colspan="2">(Year)</td>
                                    <td colspan="4">10. Date when dissolved?</td>
                                    <td colspan="3">(Day)</td>
                                    <td colspan="3">(Month)</td>
                                    <td colspan="2">(Year)</td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">11. Degree of relationship of contracting parties </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">(First)</td>
                                    <td colspan="3">(Middle)</td>
                                    <td colspan="2">(Last)</td>
                                    <td colspan="4">12. Name of Father</td>
                                    <td colspan="3">(First)</td>
                                    <td colspan="3">(Middle)</td>
                                    <td colspan="2">(Last)</td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">13. Citizenship </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                    <td colspan="4">14. Residence </td>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                </tr>
                                <tr>
                                    <td colspan="3">(First)</td>
                                    <td colspan="3">(Middle)</td>
                                    <td colspan="2">(Last)</td>
                                    <td colspan="4">15. Name of Mother</td>
                                    <td colspan="3">(First)</td>
                                    <td colspan="3">(Middle)</td>
                                    <td colspan="2">(Last)</td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">16. Citizenship </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                    <td colspan="4">17. Residence </td>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">18. Persons who gave consent or advice </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">19. Relationship </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td colspan="8"></td>
                                    <td colspan="4">20. Citizenship </td>
                                    <td colspan="8"></td>
                                </tr>
                                <tr>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                    <td colspan="4">21. Residence </td>
                                    <td>(House No.)</td>
                                    <td>(Street)</td>
                                    <td>(Barangay)</td>
                                    <td>(City/Municipality)</td>
                                    <td colspan="2">(Province)</td>
                                    <td colspan="2">(Country)</td>
                                </tr>
                                <tr>
                                    <td colspan="8">__________________
                                        <br>Signature of Applicant
                                        <br>
                                        <br>SUBSCRIBED AND SWORN to me before this ___ day of ____,____ at _____, Philippines affiant who exhibited to me his Community Tax Cert. _____ issued on ______,______,___ at ___________.
                                        <br>
                                        <br>____________________________________________
                                        <br>(Signature Over Printed Name of the Civil Registrar)
                                    </td>
                                    <td colspan="4">Exempt form documentaru stamp tax</td>
                                    <td colspan="8">__________________
                                        <br>Signature of Applicant
                                        <br>
                                        <br>SUBSCRIBED AND SWORN to me before this ___ day of ____,____ at _____, Philippines affiant who exhibited to me his Community Tax Cert. _____ issued on ______,______,___ at ___________.
                                        <br>
                                        <br>____________________________________________
                                        <br>(Signature Over Printed Name of the Civil Registrar)
                                    </td>
                                </tr>
                               
                                




                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
