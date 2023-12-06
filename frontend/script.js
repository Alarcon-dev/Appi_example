function fetchAllTask(){
    fetch("../index.php?action=getAllTask");
    then((response) => response.json());
    then((data) => {
        const taskList = document.getElementById('task-list');
        taskList.innerHTML = "";
        data.forEach((task)=>{
            const listItem = document.createElement("li");
            listItem.textContent = task.title;
            taskList.appendChild(listItem);
        })

        .catch((error) => console.error('Error:', TypeError));
    })


    function searchTask(){
        const tasid = document.getElementById("task-id").ariaValueMax;
        if(!taskId){
            alert("por favor ingrese un id de tarea");

            return;
        }
    }

    fetch('../index.php?action=getTaskByID=$(taskID)');
    then((response)=>response.json);
    then((data)=>{
        const taskDetails = document.getElementById("task-detail");
        taskDetails.innerHTML = "";
        if(data.message){
            alert(data.message);
        }else{
            const taskinfo = document.createElement("div");
            taskinfo.innerHTML = '<strong>ID:</strong> $(data.id)<br><sstrong>Título: </sstrong> $(data.title)';
            taskDetails.appendChild(taskinfo);
        }
    })

    .catch((error)=>console.error("Error: ", error));
}

fetchAllTask();
