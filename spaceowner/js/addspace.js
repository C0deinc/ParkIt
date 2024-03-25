function generateVehicleSlots(containerId, numRows, numCols, maxVehicles, identifier) {
    // Limit maxVehicles to 100
    maxVehicles = Math.min(maxVehicles, 100);

    // Clear existing slots
    $("#" + containerId).empty();
    count = 1;
    // Generate vehicle slots
    for (var row = 1; row <= numRows && (row - 1) * numCols < maxVehicles; row++) {
      var rowContainer = $("<div></div>").addClass("row flex-nowrap").appendTo("#" + containerId);
      for (var col = 1; col <= numCols && (row - 1) * numCols + col <= maxVehicles; col++) {
        var slot = $("<div></div>")
          .addClass("col")
          .append(
            $("<div></div>")
            .addClass("d-flex flex-column")
            .css({
              "border-radius": "4px",
              "border": "1px solid #06283D",
              "width": "45px",
              "height": "35px",
              "margin": "2px"
            })
            .append(
              $("<div></div>")
              .addClass("flex-shrink-1 w-100 d-flex justify-content-center align-items-center")
              .append("<p class='m-0 fw-semibold' style='font-size: 11px'>" + identifier + "_" + count + "</p>")
            )
            .append(
              $("<div></div>")
              .css({
                "height": "15px",
                "background-color": "#06283D"
              })
            )
          )
          .appendTo(rowContainer);

        count++;
      }
    }
  }


  function updateDivColor(checkboxId, divId) {
    var checkbox = $("#" + checkboxId);
    var div = $("#" + divId);

    if (checkbox.prop('checked')) {
      div.css({
        "background-color": "#06283D",
        "color": "white"
      });
      div.find('p').css({
        "color": "white"
      });
    } else {
      div.css({
        "background-color": "white",
        "color": "black"
      });
      div.find('p').css({
        "color": "black"
      });
    }
  }

  function selectRate(checkboxId, amountId, timeId, divId) {
    var checkbox = $("#" + checkboxId);
    var amount = $("#" + amountId);
    var timeAllowance = timeId != null ? $("#" + timeId) : null;

    var div = $("#" + divId);

    if (checkbox.prop('checked')) {
      div.css({
        "background-color": "#06283D",
        "color": "white"
      });
      div.find('p').css({
        "color": "white"
      });

      amount.attr("disabled", false);
      if(timeAllowance != null){
        timeAllowance.attr("disabled", false);
      }
    } else {
      div.css({
        "background-color": "white",
        "color": "black"
      });
      div.find('p').css({
        "color": "black"
      });

      amount.attr("disabled", true);
      if(timeAllowance != null){
        timeAllowance.attr("disabled", true);
      }
    }
  }

  function calculateRowsAndColumns(squareMeters, width, length, totalVehicles) {
    const totalArea = width * length;

    // Calculate the maximum number of vehicles that can fit in the available area
    const maxVehicles = Math.floor(totalArea / squareMeters);

    // Calculate the number of rows and columns based on the maximum number of vehicles
    let numRows = Math.ceil(Math.sqrt(maxVehicles));
    let numCols = Math.ceil(maxVehicles / numRows);

    // Adjust the number of rows and columns based on the total number of vehicles
    if (totalVehicles <= maxVehicles) {
      numRows = Math.ceil(Math.sqrt(totalVehicles));
      numCols = Math.ceil(totalVehicles / numRows);
    }

    return {
      numRows,
      numCols
    };
  }




  function updateSpaceSlot() {
    const a_sqm = 2.07; // Motorcycle
    const a1_sqm = 5.25; // Tricycle
    const b_sqm = 11.0; // Cars
    const b1_sqm = 12.0; // Vans
    const c_sqm = 45.0; // Bus
    const c1_sqm = 20.0; // Light Commercial
    const d_sqm = 36.0; // Heavy Commercial
    const d1_sqm = 45.0; // Light Articulated
    const e_sqm = 75.0; // Heavy Articulated

    var width = isNaN(parseInt($("#width").val())) ? 0 : parseInt($("#width").val());
    var length = isNaN(parseInt($("#length").val())) ? 0 : parseInt($("#length").val());

    const totalSquareMeter = parseFloat(width * length);

    const {
      numRows: a_numRows,
      numCols: a_numCols
    } = calculateRowsAndColumns(a_sqm, width, length, Math.floor(totalSquareMeter / a_sqm));
    const {
      numRows: a1_numRows,
      numCols: a1_numCols
    } = calculateRowsAndColumns(a1_sqm, width, length, Math.floor(totalSquareMeter / a1_sqm));
    const {
      numRows: b_numRows,
      numCols: b_numCols
    } = calculateRowsAndColumns(b_sqm, width, length, Math.floor(totalSquareMeter / b_sqm));
    const {
      numRows: b1_numRows,
      numCols: b1_numCols
    } = calculateRowsAndColumns(b1_sqm, width, length, Math.floor(totalSquareMeter / b1_sqm));
    const {
      numRows: c_numRows,
      numCols: c_numCols
    } = calculateRowsAndColumns(c_sqm, width, length, Math.floor(totalSquareMeter / c_sqm));
    const {
      numRows: c1_numRows,
      numCols: c1_numCols
    } = calculateRowsAndColumns(c1_sqm, width, length, Math.floor(totalSquareMeter / c1_sqm));
    const {
      numRows: d_numRows,
      numCols: d_numCols
    } = calculateRowsAndColumns(d_sqm, width, length, Math.floor(totalSquareMeter / d_sqm));
    const {
      numRows: d1_numRows,
      numCols: d1_numCols
    } = calculateRowsAndColumns(d1_sqm, width, length, Math.floor(totalSquareMeter / d1_sqm));
    const {
      numRows: e_numRows,
      numCols: e_numCols
    } = calculateRowsAndColumns(e_sqm, width, length, Math.floor(totalSquareMeter / e_sqm));

    $("#a_totalSpace").attr("value", Math.floor(totalSquareMeter / a_sqm));
    $("#a1_totalSpace").attr("value", Math.floor(totalSquareMeter / a1_sqm));
    $("#b_totalSpace").attr("value", Math.floor(totalSquareMeter / b_sqm));
    $("#b1_totalSpace").attr("value", Math.floor(totalSquareMeter / b1_sqm));
    $("#c_totalSpace").attr("value", Math.floor(totalSquareMeter / c_sqm));
    $("#c1_totalSpace").attr("value", Math.floor(totalSquareMeter / c1_sqm));
    $("#d_totalSpace").attr("value", Math.floor(totalSquareMeter / d_sqm));
    $("#d1_totalSpace").attr("value", Math.floor(totalSquareMeter / d1_sqm));
    $("#e_totalSpace").attr("value", Math.floor(totalSquareMeter / e_sqm));

    $("#motorcycleSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / a_sqm));
    $("#tricycleSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / a1_sqm));
    $("#carsSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / b_sqm));
    $("#vansSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / b1_sqm));
    $("#busSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / c_sqm));
    $("#lcvSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / c1_sqm));
    $("#hcvSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / d_sqm));
    $("#lavSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / d1_sqm));
    $("#havSpace").text("Total Spaces: " + Math.floor(totalSquareMeter / e_sqm));


    generateVehicleSlots("motorcycleSpacesContainer", a_numRows, a_numCols, Math.floor(totalSquareMeter / a_sqm), "A");
    generateVehicleSlots("tricycleSpacesContainer", a1_numRows, a1_numCols, Math.floor(totalSquareMeter / a1_sqm), "A1");
    generateVehicleSlots("carsSpacesContainer", b_numRows, b_numCols, Math.floor(totalSquareMeter / b_sqm), "B");
    generateVehicleSlots("vansSpacesContainer", b1_numRows, b1_numCols, Math.floor(totalSquareMeter / b1_sqm), "B1");
    generateVehicleSlots("busSpacesContainer", c_numRows, c_numCols, Math.floor(totalSquareMeter / c_sqm), "C");
    generateVehicleSlots("lcvSpacesContainer", c1_numRows, c1_numCols, Math.floor(totalSquareMeter / c1_sqm), "C1");
    generateVehicleSlots("hcvSpacesContainer", d_numRows, d_numCols, Math.floor(totalSquareMeter / d_sqm), "D");
    generateVehicleSlots("lavSpacesContainer", d1_numRows, d1_numCols, Math.floor(totalSquareMeter / d1_sqm), "D1");
    generateVehicleSlots("havSpacesContainer", e_numRows, e_numCols, Math.floor(totalSquareMeter / e_sqm), "E");
  }