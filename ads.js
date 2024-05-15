fetch('https://sheetdb.io/api/v1/tyf6zlklqzbhb')
            .then(response => response.json())
            .then(data => {
                console.log(data[0].url);
            })
            .catch(error => console.error('Error:', error));
