<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>

<body id = "body">
    <script>
        const createTable = () => {
            let table = document.createElement('table');
            table.style.border = "1px solid black";
            return table;
        }

        const getTableHeading = (name) => {
            let th = document.createElement('th');
            th.innerHTML = name;
            th.style.border = '1px solid black';
            return th;
        }

        const getTableData = (data) => {
            let td = document.createElement('td');
            td.innerHTML = data;
            td.style.border = '1px solid black';
            return td;
        }

        const getTableRow = () => document.createElement('tr');
        
        const temperature = {"sat": 34,"sun":32, "mon":31, "tue":32, "wed":33, "thu":34, "fri":34};

        let max_temp = 0;

        for (const [key, value] of Object.entries(temperature)) {
            max_temp = Math.max(max_temp, value);
        }

        let table = createTable();

        // heading
        let thead = document.createElement('thead');
        thead.appendChild(getTableHeading('Day'));
        thead.appendChild(getTableHeading('Temperature'));

        table.appendChild(thead);

        let tbody = document.createElement('tbody');

        for (const [key, value] of Object.entries(temperature)) {
            let row = getTableRow();
            let day = getTableData(key);
            let temp = getTableData(value);
            
            if (value == max_temp){
                temp.style.color = '#ff0000';
            }

            row.appendChild(day);
            row.appendChild(temp);
            tbody.appendChild(row);
        }
        
        table.appendChild(tbody);

        document.getElementById('body').appendChild(table);
    </script>
    
    
</body>
</html>