function table(){
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
        "status" : "Pending"
      },
      { "date" : 
        {
          "month": 1,
          "day": 21,
          "year": 2013
        },
        "subject" : "Software",
        "assignee" : "Yusuke",
        "status" : "Pending"
      },
      { "date" : 
        {
          "month": 7,
          "day": 26,
          "year": 2013
        },
        "subject" : "Software",
        "assignee" : "Yusuke",
        "status" : "Pending"
      },
      { "date" : 
        {
          "month": 10,
          "day": 17,
          "year": 2013
        },
        "subject" : "Software",
        "assignee" : "Yusuke",
        "status" : "Pending"
      }
    ];
refreshContent(contents);
function refreshContent(contents){
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
}

export{
    table
}