body {
    font: italic bold 1.2rem "Fira Sans", sans-serif;
    background-color: #f4e4d6;
    margin: 25px;
    padding: 45px;
}

header {
    color: 	#ead8c8;
    font-size: 12px;
    text-align: center;
    text-shadow: 2px 2px beige;
}


.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.team-picture {
    width: 165px;
    height: 180px;
    object-fit: cover;
    margin: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: all-ease-in-out 0.8s;
}

.information {
    margin-top: 20px;
    background: #ead8c8;
    padding: 30px;
    border-radius: 17px;
    
    box-shadow: 0 0 50px rgba(0,0,0,0.1);
}

.information p {
    margin: 7px 0;
    font-size: 20px;
    text-align: center;
    
}

.container .team-picture:hover {
    width: 20%;
}
