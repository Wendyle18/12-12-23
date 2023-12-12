//menu icon
document.querySelector('.menu-icon').addEventListener('click', function() {
    this.classList.toggle('clicked');
    });






// Add Ticket Panel
var modal = document.getElementById("myModal");
var btn = document.getElementById("ticketbutton");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function (){
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
  }
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }





// Add Ticket Panel data 
let formModal = document.querySelector("#addNewTicketModal");
let submitBtn = document.querySelector ('#submitBtn');
let subj= document.querySelector('#subj');
let description= document.querySelector('#description');


/*
// Table data
    let tableContent = document.querySelector('#contents');
    let sortBtn = document.querySelector('#sortBtn-js');
      let contents = [
          { "date" :
            {
              "month": 3,
              "day": 13,
              "year": 2013
            },
            "subject" : "Software",
            "assignee" : "Sasuke",
            "desciption": "",
            "status" : "Pending"
          }
      ];

     
    refreshContent(contents);
    function refreshContent(contents){
      // console.log(contents);
      console.log(contents[1]);
      tableContent.innerHTML = '';
      for(let i=0;i<contents.length;i++){
        tableContent.innerHTML +=
        `<tr>
        <td data-label="Date">${contents[i].date.month}/${contents[i].date.day}/${contents[i].date.year}</td>
        <td data-label="Subject">${contents[i].subject}</td>
        <td data-label="Assignee">${contents[i].assignee}</td>
        <td data-label="Status">${contents[i].status}</td>
        </tr>`
      }
    }

*/
      
        //SORT
      sort();
      function sort(){
        sortBtn.addEventListener('click',()=>{
          contents.sort((a, b) => {
            const dateA = new Date(a.date.year, a.date.month - 1, a.date.day);
            const dateB = new Date(b.date.year, b.date.month - 1, b.date.day);
            return dateB - dateA; // Compare in reverse order for descending sorting
          });
          tableContent.innerHTML = '';
          refreshContent(contents);
        })
      }
      
      submitBtn.addEventListener('click', function (e){
        e.preventDefault();
        let passData = {
                        "date" :
                                {
                                  "month": 0,
                                  "day": 0,
                                  "year": 0
                                },
                        "subject"   : subj.value,
                        "assignee"  : "",
                        "desciption": "",
                        "status"    : "Pending"
                      };

          contents.push(passData);

          tableContent.innerHTML +=
                                    `<tr>
                                        <td data-label="Date">${passData.date.month}/${passData.date.day}/${passData.date.year}</td>
                                        <td data-label="Subject">${passData.subject}</td>
                                        <td data-label="Assignee">${passData.assignee}</td>
                                        <td data-label="Status">${passData.status}</td>
                                    </tr>`;


                                    
        modal.style.display = "none";
      })   
     

      //Filter