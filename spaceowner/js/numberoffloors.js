
$(document).ready(function(){
    $('#floors').on('input', function(){
        var numberOfFloors = $(this).val();
        var accordionContent = '';

        for(var i = 1; i <= numberOfFloors; i++) {
            accordionContent += `
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading${i}">
                    <button class="accordion-button collapsed" type="button" style="font-size: 12px;" data-bs-toggle="collapse" data-bs-target="#collapse${i}" aria-expanded="true" aria-controls="collapse${i}">
                        Floor ${i}
                    </button>
                </h2>
                <div id="collapse${i}" class="accordion-collapse collapse" aria-labelledby="heading${i}" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="mb-3" style="font-size: 12px;">
                            <label for="spacedimension${i}" style="font-size: 12px;" class="form-label"><b>Enter Space Dimension</b></label>
                            <label for="width" style="font-size: 12px;" class="form-label">Width </label>
                            <div class="input-group input-group-sm">
                                <span class="input-group-text" style="font-size: 10px;" id="inputGroup-sizing-sm">Meter</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <label for="length" style="font-size: 12px;" class="form-label"><b>Length</b></label>
                            <div class="input-group input-group-sm">
                                <span class="input-group-text" style="font-size: 10px;" id="inputGroup-sizing-sm">Meter</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="mb-3" id="availablespaces${i}">
                            <label for="availablespaces${i}" style="font-size: 12px;" class="form-label"><b>Choose available spaces to be displayed</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="motorcycles${i}" name="parking-lot" value="motorcycles">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="motorcycles${i}">
                                        A - for Motorcycles
                                    </label>
                                </div>
                                <div class="parking-lot" id="motorcycles${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M3</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M4</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M5</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div> 
                                    <div style="display: flex; justify-content: space-around;">   
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M6</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M7</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M8</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M9</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">M10</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tricycles${i}" name="parking-lot" value="tricycles">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="tricycles${i}">
                                        A1 - for Tricycles
                                    </label>
                                </div>
                                <div class="parking-lot" id="tricycles${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T3</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T4</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div> 
                                    <div style="display: flex; justify-content: space-around;">   
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T5</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T6</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T7</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">T8</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cars${i}" name="parking-lot" value="cars">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="cars${i}">
                                        B - for Cars
                                    </label>
                                </div>
                                <div class="parking-lot" id="cars${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">C1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">C2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">C3</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div> 
                                    <div style="display: flex; justify-content: space-around;">   
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">C4</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">C5</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">C6</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="vans${i}" name="parking-lot" value="vans">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="vans${i}">
                                        B1 - for Vans
                                    </label>
                                </div>
                                <div class="parking-lot" id="vans${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">V1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">V2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">V3</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div> 
                                    <div style="display: flex; justify-content: space-around;">   
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">V4</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">V5</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">V6</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="buses${i}" name="parking-lot" value="buses">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="buses${i}">
                                        D - for Buses
                                    </label>
                                </div>
                                <div class="parking-lot" id="buses${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">B1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">B2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div> 
                                    <div style="display: flex; justify-content: space-around;">   
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">B3</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">B4</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="lightcommercialvehicles${i}" name="parking-lot" value="lightcommercialvehicles">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="lightcommercialvehicles${i}">
                                        B1 - for Light Commercial Vehicles  
                                    </label>
                                </div>
                                <div class="parking-lot" id="lightcommercialvehicles${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">LCV1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">LCV2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">LCV3</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">LCV4</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="heavycommercialvehicles${i}" name="parking-lot" value="heavycommercialvehicles">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="heavycommercialvehicles${i}">
                                        B1 - for Heavy Commercial Vehicles  
                                    </label>
                                </div>
                                <div class="parking-lot" id="heavycommercialvehicles${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">HCV1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">HCV2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">HCV3</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">HCV4</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="lightarticulatedvehicles${i}" name="parking-lot" value="lightarticulatedvehicles">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="lightarticulatedvehicles${i}">
                                        BE - for Light Articulated Vehicles
                                    </label>
                                </div>
                                <div class="parking-lot" id="lightarticulatedvehicles${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">LAV1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">LAV2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="heavyarticulatedvehicles${i}" name="parking-lot" value="heavyarticulatedvehicles">
                                <div style="border: 2px groove; border-radius: 5px;">
                                    <label class="form-check-label" style="font-size: 10px; margin-left: 5px;" for="heavyarticulatedvehicles${i}">
                                        BE - for Heavy Articulated Vehicles
                                    </label>
                                </div>
                                <div class="parking-lot" id="heavyarticulatedvehicles${i}-lot" style="border: 2px groove; border-radius: 5px; margin-top: -3px; display: none;">
                                    <div style="display: flex; justify-content: space-around;">
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">HAV1</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                        <div class="my-2" style="border: 1px solid black; border-radius: 5px; width: 40px;">
                                            <div class="text-center" style="font-size: 10px;">HAV2</div>
                                            <div style="background-color: #06283D">c</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3" style="font-size: 12px;">
                            <label for="vehicleweightlimit${i}" class="form-label"><b>Vehicle Weight Limit</b></label>
                            <input type="text" class="form-control" id="vehicleweightlimit" name="vehicleweightlimit" placeholder=" Input vehicle wieht limit" style="font-size: 10px;">
                        </div>
                        <div class="mb-3">
                            <label for="photos${i}" class="form-label" style="font-size: 12px;"><b>Add photos</b></label><br>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Choose files" style="font-size: 10px;" aria-label="photos" aria-describedby="photos">
                                <button class="px-2" style="background-color: #06283D; font-size: 10px; color: white;" type="button" id="photos"> Browse Files </button>
                            </div>
                            <div class="p-5 text-center" style="border: dashed 1px gray; font-size: 10px; color: gray;"> <i class="fa fa-cloud-upload fa-3x" aria-hidden="true"></i><br>Drag and drop files here</div>
                        </div>
                    </div>
                </div>
            </div>`;
        }
        $('#accordion').html(accordionContent);
    });
});

