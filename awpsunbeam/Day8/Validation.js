     function ValidateRange(ControlID,Min, Max, ErrDivID, ErrorMessage)
            {
                debugger;
               var inputControl =   document.getElementById(ControlID);
               var errorDivision =   document.getElementById(ErrDivID);
            
                if(parseInt(inputControl.value)< Min || parseInt(inputControl.value)> Max)
                {
                    errorDivision.innerText = ErrorMessage;
                }
                else
                {
                    errorDivision.innerText = "";
                    }
            }

            function ValidateForCharactersOnly(ControlID, ErrDivID, ErrorMessage)
            {
               var inputControl =   document.getElementById(ControlID);
               var errorDivision =   document.getElementById(ErrDivID);
            
                if(!isNaN(inputControl.value))
                {
                    errorDivision.innerText = ErrorMessage;
                }
                else
                {
                    errorDivision.innerText = "";
                }
            }

             function ValidateForNumbersOnly(ControlID, ErrDivID, ErrorMessage)
            {
               var inputControl =   document.getElementById(ControlID);
               var errorDivision =   document.getElementById(ErrDivID);
               var isItNumber = false;  
                if(isNaN(inputControl.value))
                {
                    isItNumber = false;
                    errorDivision.innerText = ErrorMessage;
                }
                else
                {
                    isItNumber = true;
                    errorDivision.innerText = "";
                }
                return isItNumber;
            }
            

            function ValidateEmpty(ControlID, ErrDivID, ErrorMessage)
            {
               var inputControl =   document.getElementById(ControlID);
               var errorDivision =   document.getElementById(ErrDivID);
               var isItEmpty = false;

                if(inputControl.value=="")
                {
                    isItEmpty = true;
                    errorDivision.innerText = ErrorMessage;
                }
                else
                {
                    isItEmpty = false;
                    errorDivision.innerText = "";
                }
                return isItEmpty;

            }