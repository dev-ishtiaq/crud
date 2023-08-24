
       $(document).ready(function () {
            $('#myTable').DataTable();
        });
    
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click", (e)=>{
                console.log("edit");
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[0].innerText;
                comm = tr.getElementsByTagName("td")[1].innerText;
                console.log(title, comm);
                titleEdit.value = title;
                commEdit.value = comm;
                slEdit.value = e.target.id;
                console.log(e.target.id); 
                $('#editModal').modal('toggle');
            })
        });

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element)=>{
            element.addEventListener("click", (e)=>{
                console.log("edit ", );
                sl = e.target.id.substr(1,)
                
                if(confirm("Are you sure to delete this record?")){
                    console.log("yes")
                    window.location = `/crud/index.php?delete=${sl}`;
                    // post request to submit form ====
                } else{
                    console.log("no")
                }
            })
        });
   