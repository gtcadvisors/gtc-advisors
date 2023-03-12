//multiselect tag
$(".mult-select-tag button").click(function(){window.scrollTo({ left: 0, top: document.body.scrollHeight, behavior: "smooth" })} )


//profile picture mechanics
$("#upload-pic-btn").click(function (){
    $("#profile-image-upload").click();/* clicks on the hidden file input */
})

$("#upload-new-pic-btn").click(function(){
    $("#profile-image-upload").click();
})


$("#profile-image-upload").change(function () {
    previewProfileImage(this)
    $("#profile-picture").removeClass("required")
})


function previewProfileImage(uploader){
    if ( uploader.files && uploader.files[0] && checkFileInput($("#profile-image-upload"), "picture") === true ){
      $("#profile-picture").css("background", `url('${window.URL.createObjectURL(uploader.files[0])}')`)
      $("#upload-delete-cntr").removeClass("hidden")
      $("#upload-pic-cntr").addClass("hidden")
      $("#profile-picture i").addClass("hidden")

    }
}

$("#delete-pic-btn").click(function(){
    $("#profile-picture").css("background", "#E1E6EF")
    $("#profile-picture i").removeClass("hidden")
    $("#upload-delete-cntr").addClass("hidden")
    $("#upload-pic-cntr").removeClass("hidden")

    //empties the file input
    document.querySelector("#profile-image-upload").value= null

})


//Text Area Word Count
$("#bio").on("input", function (){$("#bio-word-count").text(`${$(this).val().length}`)})
$("#description").on("input", function (){$("#desc-word-count").text(`${$(this).val().length}`)})



// show agency size and no of organization for agency type of advisors
$("#freelancer-radiobtn").click(()=>{
    $(".agency-contents").addClass("hidden")
})


$("#agency-radiobtn").click(()=>{
    $(".agency-contents").removeClass("hidden")
})



// radio--select dropdown functionality
$(".dropdown--caret").click((e)=>{//control the drop down menu
    e.target.parentElement.children[2].classList.toggle("hidden")
})

// $(document).ready(function () {
//     $('.select--radio-dropdown-items input[type = "radio"]').click(function () {
//         return false;
//     });
// });

$(".select--radio-dropdown-item").click((e)=>{
    e.target.parentElement.parentElement.children[0].classList.remove("select--radio-dropdown-error")
    e.target.children[0].checked = true
    const value = e.target.children[0].value
    e.target.parentElement.parentElement.children[0].setAttribute("value", value)
    e.target.parentElement.parentElement.children[2].classList.add("hidden")
    if(value === "Other"){
        e.target.parentElement.parentElement.parentElement.parentElement.children[1].classList.remove("hidden")
    }else{
        e.target.parentElement.parentElement.parentElement.parentElement.children[1].classList.add("hidden")
    }
})

$(".select--radio-dropdown-item input[type ='radio']").click((e)=>{
    e.target.parentElement.parentElement.children[0].classList.remove("select--radio-dropdown-error")
    const value = e.target.value
    e.target.parentElement.parentElement.parentElement.children[0].setAttribute("value", value)
    e.target.parentElement.parentElement.parentElement.children[2].classList.add("hidden")
    if(value === "Other"){
        e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].classList.remove("hidden")
    }else{
        e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].classList.add("hidden")
    }
})

$(".select--radio-dropdown-item label").click((e)=>{
    return false
    }
)





// add new expertise
$("#add-new-expertise").click(function (){
    $(".new-expertise").removeClass("hidden")
    $("#add-new-expertise").addClass("hidden")
})

//add expertise
$("#add-expertise").click(function (){
    const expertiseCount = $(".expertise").length
    const id = expertiseCount + 1;
    let value = $('.new-expertise-input input').val()

    const newExpertiseContainer = document.createElement("div")
    newExpertiseContainer.classList.add("col-sm-12", "col-md-4")

    const newExpertiseLabel = document.createElement("label")
    newExpertiseLabel.classList.add("form-check-label", "text-dark", "ms-3")
    newExpertiseLabel.innerText = value
    newExpertiseLabel.setAttribute("for", id)

    const newExpertiseCheckBox = document.createElement("input")
    setAttributes(newExpertiseCheckBox, {type: "checkbox", id:id, value:value, name:"others[]"})
    newExpertiseCheckBox.classList.add("form-check-input", "expertise")
    newExpertiseCheckBox.checked = true

    newExpertiseContainer.appendChild(newExpertiseCheckBox)
    newExpertiseContainer.appendChild(newExpertiseLabel)

    if(value){
        $(".expertise-list").append(newExpertiseContainer)
        $('.new-expertise-input input').val("")
    }
})



//add certifications
let certificateCount = 0
$("#add-certificate-btn").click(function (){
    const certificateName = $("#certificate-select").val() === "Other"? $("#certificate-name"):$("#certificate-select")
    const certificateFile = $(".certificate") 
    if(certificateName.val()){
        if(checkFileInput(certificateFile)){
            $("#close-cert-modal").click()
            certificateCount ++
            addCertificate(certificateCount, certificateName, certificateFile)
            $(".no-cert-placeholder").addClass("hidden")
            $(".cert-table").removeClass("hidden")
            certificateFile.val("")
            $(".file-error").addClass("hidden")
        }
    }else{
        $("#certificate-select").val() !== "Other"?$("#certificate-select").addClass("select--radio-dropdown-error")
        :checkInput($("#certificate-name"))    
    }

})

//add licenses
let licenseCount = 0
$("#add-license-btn").click(function (){
    const licenseName = $("#license-select").val() === "Other"? $("#license-name"):$("#license-select")
    const licenseFile = $(".license")
    if(licenseName.val()){
        if(checkFileInput(licenseFile, "file")){
            $("#close-license-modal").click()
            licenseCount ++
            addLicense(licenseCount, licenseName, licenseFile)
            $(".no-license-placeholder").addClass("hidden")
            $(".license-table").removeClass("hidden")
            licenseFile.val("")
            $(".file-error").addClass("hidden")
        }
    }else{
        $("#license-select").val() !== "Other"?$("#license-select").addClass("select--radio-dropdown-error")
        :checkInput($("#license-name"))    
    }

})

//resume


//add resume
$("#add-resume-btn").click(function (){
    $(".resume-upload-container").removeClass("hidden")
})






function addCertificate(count, name, file){
    //create hidden inputs and adds it to the form
    const cNameInput = document.createElement("input")
    setAttributes(cNameInput, {type:"hidden", value:name.val(), name:"certificateName[]"})
    const cFileInput = file[0].cloneNode(true)
    setAttributes(cFileInput, {name: "certificateFile[]", class: "hidden"})
    // creates a data row and add it to the file
    const dataRow = document.createElement("tr")
    const cCount = document.createElement("th")
    cCount.innerHTML = `${count}`
    cCount.setAttribute("scope", "row")
    const cName = document.createElement("td")
    cName.innerHTML = name.val()
    const deleteBtnContainer = document.createElement("td")
    const deleteBtn = document.createElement("input")
    setAttributes(deleteBtn, {type:"button", value:"Delete"})
    deleteBtn.classList.add("btn","btn-sm","delete-btn-2", "delete-certificate-btn")
    deleteBtn.addEventListener("click", function (e){
        e.target.parentElement.parentElement.remove()
        certificateCount --
        const certCounts = $(".cert-table tbody th")
        for(let i=0; i<certificateCount; i++){
            certCounts[i].innerHTML = `${i+1}`
        }

        if(certificateCount<=0){
            $(".cert-table").addClass("hidden")
            $(".no-cert-placeholder").removeClass("hidden")
        }

    })
    deleteBtnContainer.appendChild(deleteBtn)
    dataRow.appendChild(cCount)
    dataRow.appendChild(cName)
    dataRow.appendChild(deleteBtnContainer)
    dataRow.appendChild(cNameInput)
    dataRow.appendChild(cFileInput)
    $(".cert-table tbody").append(dataRow)

}

function addLicense(count, name, file){
    //create hidden inputs and adds it to the form
    const lNameInput = document.createElement("input")
    setAttributes(lNameInput, {type:"hidden", value:name.val(), name:"licenseName[]"})
    const lFileInput = file[0].cloneNode(true)
    setAttributes(lFileInput, {name: "licenseFile[]", class: "hidden"})
    // creates a license row and adds it to the table
    const dataRow = document.createElement("tr")
    const lCount = document.createElement("th")
    lCount.innerHTML = `${count}`
    lCount.setAttribute("scope", "row")
    const lName = document.createElement("td")
    lName.innerHTML = name.val()
    const deleteBtnContainer = document.createElement("td")
    const deleteBtn = document.createElement("input")
    setAttributes(deleteBtn, {type:"button", value:"Delete"})
    deleteBtn.classList.add("btn","btn-sm","delete-btn-2", "delete-certificate-btn")
    deleteBtn.addEventListener("click", function (e){
        e.target.parentElement.parentElement.remove()
        licenseCount --
        const licenseCounts = $(".license-table tbody th")
        for(let i=0; i<licenseCount; i++){
            licenseCounts[i].innerHTML = `${i+1}`
        }
        if(licenseCount<=0){
            $(".license-table").addClass("hidden")
            $(".no-license-placeholder").removeClass("hidden")
        }

    })
    deleteBtnContainer.appendChild(deleteBtn)
    dataRow.appendChild(lCount)
    dataRow.appendChild(lName)
    dataRow.appendChild(deleteBtnContainer)
    dataRow.appendChild(lNameInput)
    dataRow.appendChild(lFileInput)
    $(".license-table tbody").append(dataRow)
}

$(".continue-btn").click(function(){
    let formSectionId = +$(".form-section.active").attr("id")
    if(validateForm(formSectionId)){
        $(`#${formSectionId}`).addClass("hidden").removeClass("active")
        formSectionId++
        $(`#${formSectionId}`).removeClass("hidden").addClass("active")
        updateSectionHeader(formSectionId)
        window.scrollTo(0,0)
    }
})

$(".previous-btn").click(function(){
    let formSectionId = +$(".form-section.active").attr("id")
    $(`#${formSectionId}`).addClass("hidden").removeClass("active")
    formSectionId--
    $(`#${formSectionId}`).removeClass("hidden").addClass("active")
    updateSectionHeader(formSectionId)
    window.scrollTo(0,0)
})

function updateSectionHeader(sectionId){
    const headerCircles = $(".header-circle-cont")
    for(let i=0; i < headerCircles.length; i++){
        const headerCircle = headerCircles[i].children[0].children[0]
        const headerText = headerCircles[i].children[1].children[0]

        if(i === sectionId){
            headerCircle.classList.remove("circle", `bi-${i+1}-circle`, 'bi-check-circle-fill')
            headerCircle.classList.add("circle-active", `bi-${i+1}-circle-fill`)
            headerText.classList.add("blue__fg")
        }
        else if(i<sectionId){
            headerCircle.classList.remove("circle", `bi-${i+1}-circle-fill`)
            headerCircle.classList.add("circle-active", `bi-check-circle-fill`)
        }
        else{
            headerCircle.classList.remove("circle-active", `bi-${i+1}-circle-fill`, `bi-check-circle-fill`)
            headerCircle.classList.add("circle", `bi-${i+1}-circle`)
            headerText.classList.remove("blue__fg")
        }
    }
}

function validateForm(formSectionId){
    const textInputs = $(`#${formSectionId} .text-required`)
    const profileImageFileInput = $(`#${formSectionId} #profile-image-upload`)
    const languageSelect = $(`#${formSectionId} #languages`)
    const radioButtons = $(`#${formSectionId} input[type=radio]`)
    const checkBoxes = $(`#${formSectionId} input[type=checkbox]`)
    const fileDataList = $(`#${formSectionId} table`)
    const resume = $(`#${formSectionId} #resume-upload`)
    let validate = true

    // validate profile picture
    if(profileImageFileInput.length > 0){
        if (checkFileInput(profileImageFileInput, "picture") === false) {
            validate = false
            document.querySelector("#profile-picture").scrollIntoView(alignToTop = false)
            return validate
        }
    }

    // validate text inputs
    if (textInputs.length > 0){
        for(let input of textInputs){
            if(input.value === ""){
                validate = false
                input.focus()
                if(input.classList.contains("required-focus") === false){
                    $("#"+input.id).after("<span class='error empty-error'>Required</span>").addClass("required-focus")
                }
                return validate
            }

        }

    }

    // validate email
    if($("#email").length >0){
        const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(!($("#email").val().match(validRegex))){
            if($("#email").hasClass("required-focus") === false){
                $("#email").focus()
                $("#email").after("<span class='error empty-error'>Invalid Email</span>").addClass("required-focus")
            }
            validate = false
            return  validate
        }

    }

    // validate select
    if(languageSelect.length > 0){
        if(languageSelect[0].value === ""){
            console.log("yes")
            const container = $(".mult-select-tag .body");
            if(container.hasClass("required") === false){
                container.addClass("required")
                container.after("<span class='error'>Required</span>")
            }
            validate = false
            return validate
        }
        else{
            $(".error").remove()
            $(".mult-select-tag .body").removeClass("required")
        }
    }

    // validate resume
    if(resume.length>0){
        if(checkFileInput(resume, "file") === false){
            validate = false
            $("#add-resume-btn").click()
            return validate
        }

    }


    // validate radio buttons
    if(!(formSectionId === 2 || formSectionId === 3)){
        console.log(formSectionId)

        if(radioButtons.length > 0){
            const checkedRadioButtons = $("input[type=radio]:checked")
            const agencySelected = !$(".agency-contents").hasClass("hidden")
    
    
            if($("input[name=contractor]:checked").length === 0){
                validate = false
                $(".contractor-radio-error").removeClass("hidden")
                return validate
    
            }else if(agencySelected && $("input[name=agencySize]:checked").length === 0){
                validate = false
                $(".agency-size-radio-error").removeClass("hidden")
                return validate
    
            }else{
                $(".contractor-radio-error").addClass("hidden")
                $(".agency-size-radio-error").addClass("hidden")
            }
    
        }
    }


    // validate check boxes
    if(checkBoxes.length>0){
        const checkedCheckBoxes =  $(`#${formSectionId} input[type=checkbox]:checked`)
         if(formSectionId === 4 && checkedCheckBoxes.length < 2){
             validate = false
             $(".checkbox-error").removeClass("hidden")
             return validate
        }

        else if(checkedCheckBoxes.length === 0){
            validate = false
            $(".checkbox-error").removeClass("hidden")
            return validate
        }

        else{
            $(".checkbox-error").addClass("hidden")
        }
    }


    return validate
}


//form submission

$("#register-btn").click(function(){
    let formSectionId = +$(".form-section.active").attr("id")
    if(validateForm(formSectionId)){
       $("#advisor-form").submit()
    }
});





//removes the error highlight when input is changed
$("#fullname,#email,#phone,#bio,#description,#certificate-from,#certificate-name,#license-number,#license-from,#license-name").on("input",function (e) {
    $(".error").remove()
    e.target.classList.remove("required-focus")
})

function setAttributes(el, attrs) {
    Object.keys(attrs).forEach(key => el.setAttribute(key, attrs[key]));
}




function checkInput(input){
    if(input.val() === ""){
        input.focus()
        input.addClass("required-focus")
        return false
    }else{
        return true
    }
}

function checkFileInput(input, type){
    let fileExtensions = ["jpg", "jpeg", "png", "svg", "pdf", "docx"]
    if(type === "picture"){
        fileExtensions.length = 4
    }

    const fileError = $(".file-error")
    if(input[0].files.length === 0){
        fileError.removeClass("hidden")
        fileError.text("Required")
        return false
    }

    else if(!fileExtensions.includes(input[0].files[0]["name"].split(".").slice(-1)[0])){
        fileError.text("Invalid File type, only "+fileExtensions.join(", ")+" file types are allowed").removeClass("hidden")
        return false
    }

    else if(input[0].files[0]["size"] > 2*1024*1024 ){
        fileError.text("File too large, must be less than 2mb").removeClass("hidden")
        return false
    }
    else{
        fileError.text("").add("hidden")
        return true
    }
}
