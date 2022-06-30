from fastapi import FastAPI
import requests
# from fastapi.responses import FileResponse

app = FastAPI()

@app.post('/welcomeMessage')

def WelcomeMessage(phone:str , message:str):

    peruPhone = "51"+phone

    con = {
        "app": {
            "id" : "51933760767",
            "time" : "1656120356",
            
            "data" : {
                "recipient" :{
                    "id": peruPhone
                },
                "message" : [
                    {
                        "time" : "1656120356",
                        "type" : "text",
                        "value" : message
                    }
                ]
            }
        }
    }
    res = requests.post('https://whapi.io/api/send',json=con)
    return res.text
