document.getElementById('filter_Manufacturer_id').addEventListener('change',
function(){
    let companyId = this.value || this.options[this.selectedIndex].value;
    window.location.href = window.location.href.split("?")[0] + "?Manufacturer_id=" + companyId;
    //use split to eliminate this scenario of multiple concatenations:
    //http://localhost:8000/contacts?company_id=3?company_id=2?company_id=1
})