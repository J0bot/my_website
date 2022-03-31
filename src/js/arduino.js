function sendHTTP(url)
{
    axios.get(url)
}


function StopMotors()
{
    let url1 = "http://172.16.0.5/stop";
    sendHTTP(url1);
}


function StartMotors()
{
    let url1 = "http://172.16.0.5/start";
    sendHTTP(url1);
    
}

function FrontMotor(motor)
{
    /*
    #define MOT1CW 8
    #define MOT1CCW 9
    #define MOT2CW 6
    #define MOT2CCW 7
    */
   var url1, url2;;
    if(motor == 1)
    {
        url1="http://172.16.0.5/digital/8/0"
        url2="http://172.16.0.5/digital/9/1"
    }
    else if (motor==2)
    {
        url1="http://172.16.0.5/digital/6/0"
        url2="http://172.16.0.5/digital/7/1"
    }
    sendHTTP(url1);
    sendHTTP(url2);

}

function BackMotor(motor)
{
    var url1, url2;;
    if(motor == 1)
    {
        url1="http://172.16.0.5/digital/8/1"
        url2="http://172.16.0.5/digital/9/0"
    }
    else if (motor==2)
    {
        url1="http://172.16.0.5/digital/6/1"
        url2="http://172.16.0.5/digital/7/0"
    }
    sendHTTP(url1);
    sendHTTP(url2);
}

