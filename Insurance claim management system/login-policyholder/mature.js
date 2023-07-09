// const form = document.querySelector("form"),
//         nextBtn = form.querySelector(".nextBtn"),
//         backBtn = form.querySelector(".backBtn"),
//         allInput = form.querySelectorAll(".first input");


// nextBtn.addEventListener("click", ()=> {
//     allInput.forEach(input => {
//         if(input.value != ""){
//             form.classList.add('secActive');
//         }else{
//             form.classList.remove('secActive');
//         }
//     })
// })

// backBtn.addEventListener("click", () => form.classList.remove('secActive'));

// Select all input elements for verification
const name = document.getElementById("name");
const policyId = document.getElementById("policy_id");
const claimDescription = document.getElementById("claim_description");
const admittedHospitalName = document.getElementById("admitted_hospital_name");
const hospitalAdmitDate = document.getElementById("hospital_admit_date");
const dischargeDate = document.getElementById("discharge_date");
const premiumAmount = document.getElementById("premium_amount");
const claimAmount = document.getElementById("claim_amount");
const diagnosticTicket = document.getElementById("diagnostic_ticket");
const signature = document.getElementById("signature");

// Function for form verification
function formValidation() {

  // Checking name length
  if (name.value.length < 2 || name.value.length > 20) {
    alert("Name length should be more than 2 and less than 30");
    name.focus();
    return false;
  }
  
  // Checking policy ID
  if (policyId.value === "") {
    alert("Please enter the Policy ID!");
    policyId.focus();
    return false;
  }

  // Checking claim description
  if (claimDescription.value === "") {
    alert("Please enter the Claim Description!");
    claimDescription.focus();
    return false;
  }

  // Checking admitted hospital name
  if (admittedHospitalName.value === "") {
    alert("Please enter the Admitted Hospital Name!");
    admittedHospitalName.focus();
    return false;
  }

  // Checking hospital admit date
  if (hospitalAdmitDate.value === "") {
    alert("Please select the Hospital Admit Date!");
    hospitalAdmitDate.focus();
    return false;
  }

  // Checking discharge date
  if (dischargeDate.value === "") {
    alert("Please select the Discharge Date!");
    dischargeDate.focus();
    return false;
  }

  // Checking premium amount
  if (premiumAmount.value === "") {
    alert("Please enter the Premium Amount!");
    premiumAmount.focus();
    return false;
  }

  // Checking claim amount
  if (claimAmount.value === "") {
    alert("Please enter the Claim Amount!");
    claimAmount.focus();
    return false;
  }

  // Checking diagnostic ticket
  if (diagnosticTicket.value === "") {
    alert("Please upload the Diagnostic Ticket Form!");
    diagnosticTicket.focus();
    return false;
  }

  // Checking signature
  if (signature.value === "") {
    alert("Please enter your Signature!");
    signature.focus();
    return false;
  }

  return true;
}
