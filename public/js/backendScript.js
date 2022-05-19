
var selectedRow = null;

function onFormSubmit(e) {
  event.preventDefault();

  var formData = readFormData();

  if (selectedRow === null) {
    insertNewRecords(formData);
    
  }else{
    updateRecord(formData)
    selectedRow = null;
  }

  resetForm();
}



// Retrieve data
function readFormData() {

    // Constant
    const spreading_rate_paint1 = 160;
    const cost_rate_paint1 = 150;
    const Primier = 100;
    const Caulking = 55;
    const Filla = 45;
    const Masky = 30;
    
    // Variables
    var Area = 0;
    var paint_qty = 0;
    var paint_price = 0;
    var material_cost = 0;
    var total, grand_total = 0;
    var Primier_value,Caulking_value,Filla_value,Masky_value = 0;
    var Fee_value = 0;
    var counter = 0;
    var Length = 0;
    var Breath = 0;

  // Assignments
  Length = document.getElementById("length").value;
  Breath = document.getElementById("breath").value;

  Primier_value = document.getElementById("primier").value;
  Caulking_value = document.getElementById("caulking").value;
  Filla_value = document.getElementById("filla").value;
  Masky_value = document.getElementById("masky").value;
  Fee_value = document.getElementById("fee").value;


  // Calculate Area
  Area = Length * Breath;

  //  Quantity of Paint
  paint_qty = Area / spreading_rate_paint1;

  // Price of Paint
  paint_price = paint_qty * cost_rate_paint1;

  // Get Material Cost
  // if ("Primier" == Primier_value ) {
  //   // material_cost = material_cost + Primier;
  //     material_cost += Primier;
  // }

  // if ("Caulking" == Caulking_value) {
  //     material_cost += Caulking;
  // }

  if ("Filla" == Filla_value) {   //Work on this later
    // material_cost += Filla;
    material_cost = Filla;
    // console.log(material_cost);
  }

  // if ("Masky" == Masky_value) {
  //   material_cost += Masky;
  // }

  // Set Counter
   counter += 1;

  // Total cost inquired
  total = (1 + paint_price) + material_cost + (Fee_value -1); //Include the material cost later

  // Calculate Grand total
  grand_total += total;

  var formData = {};
  formData["Counter"] = counter;
  formData["Space"] = document.getElementById("space").value;

  formData["Area"] = Area;
  formData["Length"] = Length;
  formData["Breath"] = Breath ;

  formData["Paints"] = document.getElementById("paints").value;
  formData["Fee"] = Fee_value;
  formData["Primier"] = Primier_value;
  formData["Caulking"] =  Caulking_value;
  formData["Filla"] = Filla_value;
  formData["Masky"] = Masky_value;

  formData["Paint_qty"] = paint_qty;
  formData["Paint_price"] = paint_price;
  formData["Material_cost"] = material_cost;

  formData["Total"] = total;
  formData["Grand_total"] = grand_total;


  return formData;
}

// INSERT DATA
function insertNewRecords(data) {

  var table = document.getElementById("Data-section");

  var newRow = table.insertRow(table.length);
  var cell1 = newRow.insertCell(0);
      cell1.innerHTML = data.Counter;
  var cell2 = newRow.insertCell(1);
      cell2.innerHTML = data.Space;
  var cell3 = newRow.insertCell(2);
      cell3.innerHTML = data.Area;
  var cell4 = newRow.insertCell(3);
      cell4.innerHTML = data.Paint_qty;
  var cell5 = newRow.insertCell(4);
      cell5.innerHTML = data.Paint_price;
  var cell6 = newRow.insertCell(5);   
      cell6.innerHTML = data.Filla; // Give condition to it per 'selected materaql'
  var cell7 = newRow.insertCell(6);
      cell7.innerHTML = data.Material_cost; // Give condition to it per 'selected material'
  var cell8 = newRow.insertCell(7);
      cell8.innerHTML = data.Fee;
  var cell9 = newRow.insertCell(8);
      cell9.innerHTML = data.Total;

  var cell10 = newRow.insertCell(9);
      cell10.innerHTML = data.Length;
      cell10.style.display = 'none';
  var cell11 = newRow.insertCell(10);
      cell11.innerHTML = data.Breath;
      cell11.style.display = 'none';
  var cell12 = newRow.insertCell(11);
      cell12.innerHTML = data.Paints;
      cell12.style.display = 'none';

  var cell13 = newRow.insertCell(12);
      cell13.innerHTML = `<button onClick="onEdit(this)" class="action"> <i class="fa-solid fa-pencil"></i> </button> <button onClick="onDelete(this)" class="action"> <i class="fa-solid fa-trash-can"></i> </button>`;
}

// EDIT FORM
function onEdit(edit_Data) {

  selectedRow = edit_Data.parentElement.parentElement;
  document.getElementById("space").value = selectedRow.cells[1].innerHTML;
  document.getElementById("length").value = selectedRow.cells[9].innerHTML;
  document.getElementById("breath").value = selectedRow.cells[10].innerHTML;
  document.getElementById("paints").value = selectedRow.cells[11].innerHTML;
  document.getElementById("fee").value = selectedRow.cells[7].innerHTML;
  document.getElementById("filla").checked = true;
  // document.getElementById("filla").value = selectedRow.cells[5].checked.true;

}


// UPDATE FORM
function updateRecord(formData) {
  selectedRow.cells[0].innerHTML = formData.Counter;
  selectedRow.cells[1].innerHTML = formData.Space;
  selectedRow.cells[2].innerHTML = formData.Area;
  selectedRow.cells[3].innerHTML = formData.Paint_qty;
  selectedRow.cells[4].innerHTML = formData.Paint_price;
  selectedRow.cells[5].innerHTML = formData.Filla;
  selectedRow.cells[6].innerHTML = formData.Material_cost;
  selectedRow.cells[7].innerHTML = formData.Fee;
  selectedRow.cells[8].innerHTML = formData.Total;
}

// DELETE DATA
function onDelete(deleteBtn) {
  if (confirm('Do you want to DELETE this record? ')) {
    row = deleteBtn.parentElement.parentElement[0];
    document.getElementById("Data-section").deleteRow(row);
  }
  resetForm();
}

// RESET FORM
function resetForm() {
  document.getElementById("space").value = "";
  document.getElementById("length").value = "";
  document.getElementById("breath").value = "";
  document.getElementById("paints").selectedIndex = "-1";
  document.getElementById("fee").value = "";
  document.getElementById("filla").checked = false;  // Add conditions based on selected materil
}