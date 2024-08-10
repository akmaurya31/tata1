function doGet(e) {
  return HtmlService.createHtmlOutputFromFile('form');
}

function doPost(e) {
  var name = e.parameter.Name;
  var email = e.parameter.Email;
  var phone = e.parameter.Phone;
  var state = e.parameter.State;
  var pincode = e.parameter.Pincode;
  var address = e.parameter.Address;
  var franchiseType = e.parameter.FranchiseType;
  var propertyType = e.parameter.property_type;
  var tmessage = e.parameter.tmessage;
  
  var sheet = SpreadsheetApp.openById('1NztUOOIXDqNJq5V6PnR1GH8RGyyK0jv4zTq2dGLJRO4').getSheetByName('Sheet1');
  sheet.appendRow([name, email, phone, state, pincode, address, franchiseType, propertyType, tmessage]);
  
  return HtmlService.createHtmlOutput("Thank you! Your response has been recorded.");
}


//whoisgeek