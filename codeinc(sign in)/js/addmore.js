function addMore() {
    var container = document.getElementById("additionalFieldsContainer");
    var clone = document.getElementById("vehicleForm").cloneNode(true);
    container.appendChild(clone);
}