<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- rajouter icone poubelle pour les boutons delete -->

<table>
<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Mail</th>
    <th>Company</th>
    <th>Created at</th>
</tr>
<?php foreach ($contacts as $contact):  ?>

<tr>
    <td><?php echo $contact['name']; ?></td>
    <td><?php echo $contact['phone']; ?></td>
    <td><?php echo $contact['email']; ?></td>
    <td><?php echo $contact['company_id']; ?></td> 
    <td><?php echo $contact['created_at']; ?></td>
    <td><button type="submit" value="">Edit</button> <button type="submit" value="delete">delete</button></td>
</tr>

<?php endforeach; ?>
</table>
<table>
<tr>
    <th>Id</th>
    <th>TVA</th>
    <th>Name</th>
    <th>Country</th>
    <th>Type</th>
    <th>Created at</th>
</tr>
<?php foreach ($companies as $company):  ?>
<tr>
<td><?php echo $company['id']; ?></td>
<td><?php echo $company['tva']; ?></td>
<td><?php echo $company['name']; ?></td>
<td><?php echo $company['country']; ?></td>
<td><?php echo $company['type_id']; ?></td>
<td><?php echo $company['created_at']; ?></td>
<td><button type="submit" value="">Edit</button> <button type="submit" value="delete">delete</button></td>                
</tr>

<?php endforeach; ?>
</table>
                    
                   
<form method="POST" action="dashboard">
<table>
    <tr>
        <th>Id</th>
        <th>Invoice number</th>
        <th>Dates due</th>
        <th>Created at</th>
        <th>Name</th>
    </tr>
    <?php foreach ($invoices as $invoice): ?>

        <tr onclick='SaveBtnInvoice(this)'>
            <td><?php echo $invoice['id']; ?></td>
            <td onclick='InvoiceIdCompany(this)' ><?php echo $invoice['id_company']; ?></td>
            <td><?php echo $invoice['created_at']; ?></td>
            <td><?php echo $invoice['updated_at']; ?></td>
            <td onclick='InvoiceName(this)'><?php echo $invoice['name']; ?></td>
            <td><button type="submit" name="deleteInvoice" value="<?php echo $invoice['id']; ?>">Delete</button></td>

        </tr>
    <?php endforeach; ?>
</table>    
</form>




    <?php 
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>
    <!-- mettre dans une autre section -->
            <!-- fonction add Contacts -->
    <!-- <form method="POST" action="."> -->
        <form>
        <label for="contactName">Contact name:</input>
            <input name="contactName" type="text" value="">
        <label for="contactPhone">Contact phone:</input>
            <input name="contactPhone" type="number" value="">
        <label for="contactMail">Contact mail:</label>
            <input name="contactMail" value="" type="email">
        <label for="contactCompanyId">Contact company:</label>
            <input name="contactCompanyId" value="" type="number">

        <button type="submit" name="validationContact">Validation contact</button>
    </form>
        <?php 
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>


    <!-- mettre dans une autre section -->
        <!-- fonction add Companies -->
    <form method="POST" action="dashboard">
        <label for="companyName">Company name:</label>
            <input name="companyName" type="text" value="">
        <label for="companyType">Company type:</label>
            <input name="companyType" type="number" value="">
        <label for="companyCountry">Country of the company:</label>
            <input name="companyCountry" type="text" value="">
        <label for="companyTVA">TVA:</label>
            <input name="companyTVA" type="text" value="">
        
            <button type="submit" name="validationCompany">Validation Company</button>
    </form>
<form>
    <!-- mettre dans une section -->
    <!-- fonction add invoices -->
    <!-- <form method="POST" action="."> -->
        <label for="invoicesNumber">Invoice number:</input>
            <input name="invoicesNumber" type="text" value="">
        <label for="invoicesCompany">Invoice Company name:</input>
            <input name="invoicesCompany" type="text" value="">

            <button type="submit" name="validationInvoice">Validation Invoice</button>
    </form>
    <?php
    
    ?>


</table>
    </form>
    <script>
        let SaveBtn;
    function createSaveBtn(line){
        let existingBtn = line.querySelector('.saveBtn');
        if(!existingBtn){
        SaveBtn = document.createElement('button');
        SaveBtn.type = 'submit';
        SaveBtn.innerText = 'Save';
        SaveBtn.className = 'saveBtn';
        line.appendChild(SaveBtn);
        }
        
}  
function SaveBtnInvoice(line){
    createSaveBtn(line);
    SaveBtn.name = 'editInvoice';
    SaveBtn.value = "<?php echo $invoice['id']; ?>";
}
let input;
function createInputCell(cell){
    let content = cell.innerText;
    input = document.createElement('input');
    input.type='text';
    input.value=content;
    cell.innerText = '';
    cell.appendChild(input);
    input.focus();
    input.addEventListener('keydown', (event) =>{
    if(event.keyCode == 13){
    cell.innerText = input.value;
    console.log(cell.innerText);
    input.remove();
    }
    });
    input.addEventListener('blur', ()=>{
        cell.innertext = input.value;
    });

}
function InvoiceName(cell){
    createInputCell(cell);
    input.name= "invoiceName[<?php echo $invoice['id']; ?>]";
    console.log(input.name);
    return input.name;
}
function InvoiceIdCompany(cell){
    createInputCell(cell);
    input.name= "id_company[<?php echo $invoice['id']; ?>]";
    console.log(input.name);
    return input.name;
}
</script>
</body>
</html>