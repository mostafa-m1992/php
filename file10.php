<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file10</title>
</head>
<body>
    <form action="/action_page.php" target="_self" method="get" autocomplete="on" novalidate>
        <fieldset>
            <legend>form 1:</legend>
            
            <label for="fNameId">first name</label><br>
            <input type="text" id="fNameId" name="fname" value="name" size="30" required autofocus><br>
            
            <label for="lNameId">last name</label><br>
            <input type="text" id="lNameId" name="lname" value="family"><br>
            
            <label for="pinId">pin</label>
            <input type="text" id="pinId" name="pin" maxlength="4" size="4"><br>

            <label for="telId">enter your phone number:</label>
            <input type="tel" id="telId" name="tel" size="30" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>

            <label for="pwdId">password</label><br>
            <input type="password" id="pwdId" name="pwd" size="30"><br>

            <label for="emailId">enter your email</label>
            <input type="email" id="emailId" name="email" size="30" autocomplete="on" placeholder="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$"><br>

            <label for="urlId">add your homepage:</label>
            <input type="url" id="urlId" name="url" size="30"><br>
            

            <label for="carsId">choose a car</label>
            <select id="carsId" name="cars" size="4" multiple>
                <optgroup label="Swedish Cars">    
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                </optgroup>
                <optgroup label="German Cars">
                    <option value="fiat">Fiat</option>
                    <option value="audi" selected>Audi</option>
                </optgroup>
            </select><br>
            
            <label for="tarea1Id">2 text area</label>
            <textarea id="tarea1Id" name="tarea1" rows="5" cols="25" readonly>this is the first textarea</textarea>
            <textarea id="tarea2Id" name="tarea2" style="width: 70px; height: 70px;" disabled>this is the second textarea</textarea><br>
            
            <label for="browserId">data list</label>
            <input list="browsersId">
            <datalist id="browsersId">
                <option value="Internet Explorer">
                <option value="Firefox">
                <option value="Chrome">
                <option value="Opera">
                <option value="Safari">
            </datalist><br>
            
            
            <input type="radio" id="htlmId" name="fav_language" value="html">
            <label for="htmlId">html</label><br>
            
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">CSS</label><br>
            
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">JavaScript</label><br>
            


            <label>select your favorite color:</label>
            <input type="color" id="favcolorId" name="favcolor"><br>

            
            <label for="timeId">select a time:</label>  
            <input type="time" id="timeId" name="time"><br>

            <label for="dateId">date:</label>
            <input type="date" id="dateId" name="date"><br>

            <label for="dateMaxId">date max:</label>
            <input type="date" id="dateMaxId" name="datemax" max="1979-12-31"><br>
            
            <label for="dateMinId">date min:</label>
            <input type="date" id="dateMinId" name="datemin" min="2000-01-02"><br>

            <label for="birthdayTimeId">birthday time</label>
            <input type="datetime-local" id="birthdayTimeId" name="birthdaytime"><br>

            <label for="weekId">selet a week</label>
            <input type="week" id="weekId" name="week"><br>

            <label for="monthId">birthday (month and year):</label>
            <input type="month" id="monthId" name="month"><br>



            <input type="image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBIVFRISEhUREhIYERgSEhISEhERERIRGBgZGRgYGBgcIS4lHB4rIRkZJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHBISHDQsJSU0NDQ0NDQ0NDU0NDE0NDE0MTExMTQ0NzQxNDQ0NDQ0NDQ0NDE0NDE0NDQ0NDQ0NDQ0NP/AABEIAQMAwgMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAABAAIDBAUGB//EAD0QAAIBAgQEAwUHAwIGAwAAAAECAAMRBBIhMQVBUWETInEygZGhsQZCUmJywdEUI/Az8RUkc4KSokNTY//EABkBAQEBAQEBAAAAAAAAAAAAAAABAgMEBf/EACoRAQEAAgICAQIEBwEAAAAAAAABAhEDIRIxQVFhBBMigVJxkbHB0fBC/9oADAMBAAIRAxEAPwD0CCK0colQVEMcqw5YCAjwIgIZFOitCBDaAAIbQgQ2gNhhigIRGK8YHl0sxtPEfGFgIVcHaTRqiYgIjFeEIiKImKAREYhEYAhtFDAbaKOigZwEKiECOAlQREIbQgQpCOAihEgIhgERMAO4Fr84Q4lPE1gdAfONbduchGK0zjbZh0mtR3x4txpZ+kN5nvictnGqH2h+8tGsCNOlx3EaS8Wj8Q1lMzkr/WRY3F20mYMXo3rLuR6uLg/S2cRirWgw2LsffrOfrYsmxvHUsUbyeXbr+RNadiag35c5QfH8xsdEHbrKOKxflVAfaF27LM7+pzMTyGgkt08+P4f5rdXH+a15qrOOoVLuANdZ1dKttew7bx7c+bi8daWIIFa8JkeYoRBCICtFFFAz1aSCMVZIBKDCIIoDoRGiRVK2U2sbdbXEiyW9ROWA30kFXEgDQFvSwiFSm3MH1jXor3HcTUjpjhP/AExcfi6jeZcPUzqbq6ENqORHMRq4oeWoAQj6OpBBRuYIO0sYzFeEwDn+2To40KN1PaSVKodSlQAk7EEajkQZJPu9uM1J10gpVACabeyRdD2iw+IK3pn7uq/p5iZ9YEeS9yvmpt1HMesQrZyjD2tiNr9R6xt08JTuI1TmU8r2+MyHr2vHYmk7uHR1sBlcE2tY723PKOq0WWzItiWysTYgAHVvQzFlr044zGSK61vKuvX6mPp1vN1g/pdQCwG4QgXzE6j3StTJzTN3F1La1a2KNieZ0H6RDTvl0BJ7C8o5wWufZURoru7jUhFOijQXl2xcWtw5jcNzJsJvDFBfKPM/QcvXpOewzm/k07/hHX1Mu0alrqnq9Q/zOmN048mEtbSVyNzcnkNomx2oUe10HKYFfiIHkp3ZjoX3JPaWMCcjAE/3N2O4QdPWPJwy4pJuusXleOlSliL7Zj3NrSyrAi4keCyw6KKKEUlMeJADJEMofBeGNtAN5VrV2IITQ8i6kj4S3KXEeIU6SnMfNbRQLn1h04+8vW2DicRiEJNRFqL1TyMPS37iS4Ti5P8ApPn60qmjj0H3vcTMur9pHU6eYdHFwf4jRjMJiLZ/+Wqcm+4T+rl7/jMb+lfT8N49z+jcqYujXUo/kc6WbYn1mbhnam/gPuNaTdR+D+P9pTxtOqmlYGqlvJWS3iActdnHrr3jP6oFAKh8WmCMlRCQ6H6g9jG+2scOtT01sUwIzXsL6/lPWY2KxyhhlGV1bl7LdGAl56mdSgYMWFs98o9SORtvMJq2VSrqrZWIFQLcg3016dj0m678eEiTE4s51a3htcZ1tbUjXSOr8TzIBf2WIPdd7SkXbTzp5hY+0WVeSn1uNpC+HZLq+UuSMlO/+of1DQAeonO5Vvrr7Nqk7OtOoSoIFioFrDUBvSPSvSNzb2NMw0NT1G0x8TmW5QgMQFampF15XABN1PLXnIaNQCwOfRrPpoDHkkkrYcFyVpi3Mi+gv1J5RJRKEAMrE/hN7dydtpHVxylBlAUA2ta5bux5++W8PVpsB4hOcjzOWsEUfXlL4yp+yek1/KDlQe0/WNesz/26YsvPv3JirBGtkLCmNurHtCtMsLf6dMalRpfuxi/Ri/VYwxppot6lQ7ldl9DL+GTLq2VfSxPvZpmjEKotTUH850QfzKtWsW9pi3/qg90bkcssdukr8RpsMil2PVDoPU7Ta4bXDKF8osNgc2k4FHO1/cNBOk+y73Zv0fO4iZbrx8/HJj06eKC8U08TOaBHjyI1ElFgQRCG0CnxHGeGoNrsdF6es5DiFdmubjXfqZ13EcClUAMSLG4ImW32aQ/fP/gP5mct/D18GeGM79uKeiTykD0T0nYY/gaUkNRnTKOoysfQc5jr4Z9l6Z/KxCn4NONxsfQw5fKbjOwnEatEZVOZOdN/Mh9Pw+6WsYif6iK9JtCUcFUdWH03sZJWwqkEFSrn2bNlB9NNTtFTqFiUQkgpao5e65l0JsRfc2I73nTHfy6z+KK2JZQF8MgZluVBY2N9N/SQ0cS4YkALmGds4IR7AgW6m/zMKYYey5KFCSzBlGVL8j0172jsEFViSHRs7U2LMM4sjMoU6dtfSLW7er8k9QKpy5alMOFUkFQKtrlwb6W6badpTQG4UulMMhznM768s3fUbaSb+naneplZ/wC0zIKihEBN8wsT5raet9pmVC118QAksGYofOEt7PQabTz3K3tyyyk+WnQeojqjKdQCoSmrB02NiNxaWP6lHQ0wrKEIa4uVK7HMBsNbzFw7gGwaomtxUu10XmMq78uk0UrMDRyOoZr+YWQDzC4Y8xpfXrGOejG45ekjilcANpmuWClTlI9nUkE3A5S0gRm8mWmgA1qXclvTnGsrIGIKr5i9SnkH9sActdQQf95TawI8PO6sAVZgAdRqNOes7zp0jeo1XYHO4A/G1RQCAfup+5kGJxCjS4e2yi+Qdz1My2JZ1phHVgoDZUZjve+p+f8AEvYamoFyEHdiXP8AEuVZykk2jauW393QeghViZfp16Y3LHsiqo+QlocQpkZTSJHV2uZmTfy5ZZfZlq4HczpfsmpLseQXfueUHCuD4N9nLE65PZPpc7zpsNhUpjLTUKO3P1m8Y8PPy42XGJooLxTbxKYMeJEI8GBIIjADCYDSJSq1ajXWnZQNDUbXX8o5+v1knE8RkRiNGPlX1MyKGMOUF9dNh5Vk629HDx+Xa0OE02OaozVH6v5/roPdaWUwdIDRfmZzuM+0ZXSmqE9TmP7zPb7TYk7Mi+iKfrePLGPZOHk17b3FeBI4JViptte6/OcqtEI6U1B/qMx/uZ/Iw1N2ubbaG/Ic5of8Rx5Uve6DU3SmoI+F/hKmIxtTEKy00ClSLsAiC7GwEm8b6enimeM1bLP7JuKcOymm7KjIzBKnh1CQhYgeW9tPp85SwyI5GZmFYVAKhUAq4CZVYBtFzaG+u8s0KhZVprY1MuSpScPkdhoSrjb0bblKvDK4JqLULZgrCpTQB2VEC5HKqPPlOl1FxYdzGU23qzHv4Glh2qio7AK7Mj3vmdVALXC5uwEA4bqcw89ySW0NzrrNymiMApZlqZBmufIXcDMVJ63+MkXDoVXLob5vMSzEWvawGtp4uXiysmnl5ZcvTAr4TLYoDexzFQGOXnpAhC0wjq3hik1QFgFe7k6i241NvWbuKppZycuXIWtqGB/ESBt0mTicKXVajFnqWSmKdMgBGNic19TsBptJhhljNe2+HGz2gqmo4AZVTzW8TMLqjrnVbjfl8x1hXB1FZyxAa2Z/DDOy9tBHVnDEhCbsgIqOhC+QXCqgFyxcNsL+XbeSYDxCCrJUa+rlsym/pv8AvpPZji9MnSo1UncP4i6IGb2FBuSy79Zq4FM6gimrn8WenTU/Mk+8SMJTJfIM7ZgKlSwuF0BAtrsMvSwPKbOBqUlAVXoDtnpg/AzfizyZax6isuArNt/TUx2JdpdocNYWJVKncEgy6lzsqN3XK30jvKN0Ze+ol8Y8mWdvQIgtZkZfdcD3ia2AqllsxuRz6ryPrMoYkDZz6NYyzgKwz6fe0PS/aXTy8uG5trWiivFMvIpRCNjllD1jjGiEmBznG6her4ZNqaKCfU6/wJh4/FFvKgso58vjNr7TIwdXy3QpYkDdgT7R9CPnOZrVC1gLnoqC5/icsrY+jwX9M0hFEffa3Ybn0l2gMozIioo3qVCAB7zK6UKl7IihjzPnce86D4S1T4RmYGs7VH5ICSfeeXumcY9f86ceIofKDVxL7ZaYKU/idfeBMXiFOujl0UUbrqlMl9Oj3uDO1wmBVRlAVP8A803/AO47/GXn4dTykFQxPK2k7eFqTmxxvUcRTwtQpTrNUWrqGOXyVEIOwN7k6c5LWxdNWbE0HL1QCrZ1NO6mxYGy5WbQHSLimAqUWdVSm6Mc2qE2PYggiZ2C4saK1FN0cnNawNNgAAVZWO/cH42iWeq9OMmU37/192thmxbEN/TqoQl0/v2FRWButvvDW5N7jSWcHxk1Kd3cJ5yoqZxZWP8A8bK2Vib6XA6TGo4ovavSSv4ea1QCuxAANyAALqeY1Ekx+Fw4QVAtSrSJLhalVPDzMdbZWzFt40mXHLe/++zZDZ1Z6lRKdPxGAZfOXQeWxZnJBNtiPrMviOKRHpvRSs7KzU1XP5VfRh5bXFwQSd7W9YyjXdwjU74ex8iZqSM6DQmmHF3bUXNx7zJH41SVvACKjHSs9Tw0ZzzGYZgT6mZmOPtnHCy/4OCPl8WqWzoS7LSqAMme1s7sb32so2Eix3F6bpa5BX2UWrmLsbXzsBa1h/l5UqPQao2tbw1BYrbOj2uxa1wABttpaVaWCFZ2ammRb6A6W1On7e6W3Xp01J3WlwmpVNUFGuga4Asia72+l51tbhlJxzpseR8yk+h0M57Cu2GstWkGXlUpnK/8N8puYTHU30pOHO5puMtT/wAT7XujG/FeXlytu4y8ZwUprbL0encofUDb3fCVlxGIpmwqVAOXnLIR2voZ0aYsagHKeatqvp2lfEYZHByix3an1/Mnf6yWfRn8y+smWONVdnCVP10wG+K2m1wCn4r57lVWzhQSQbHbXac5UogEgzpPsvZXsOan+b/KMbb7cOe/puo6q8UbFNvmqkcpjTApgTCOIkYMfAx/tLh2ekuXYOC3pYi85xQFFhYDmZ2uKo50emDYspAPQzieJ4F6LKtQq5IzAKWy721uB0nPJ7Pw+c14npWFjl8lP71Q7n+YynimYinRBW5t4h9s9SPw/WUHBc3Y35BdlA7CbHBECkuelhEvenr8pI6DA4ZaagDVuZOpJ5kmTPUA0GrGUKmPF8iaseY1+Ey8XxNr+FQOaodHqbqnZep7zr5SOUwyyvbTxNRSxpizOBdzuKY5D9R6e89+O41wdnfyLcsfKB+Ha/vP7zp8PTSmmQHQeao25ZuZPUky3w8AucwGfKGYbhFOiL8L/DvJZ5O+OXhLY4OvwDEAMvnK282UlUa3UDeUlwdRTTzpmS9lvdWJG3mGs9bZBtKPEMOgRnIHkHiDTYp5v2j8v6VrH8XfVjisFwOpVHiOSxO2Ys2VegvsBLWJ+ylQrkRyL6ulzlcDbTqP82nVUKyEKyWyOq1Et+FhcR1atbKw5H5R4z5S/iM99OJwvDa1zh3Y+HaxWwsVvyNr27TVw+EGGNnBNI7OBdqZ/MOa/MTexaC4deY09efy+khxDqQCRodGHbn/AD7o8dF5bl+6tiEGUAgOjC4YaqR1BnNcTwGQ5k9m9xbdT6zRd6mGYqBnok3NMnQd1PIwVXV1z0zmQ6EHQqehHIznl2uNs7jOocVc2Wr/AHBsHJtVA/X97339ZoU8Q+hptmHIHysJlVqGt1lvANv8x9JnG79pnqzcdA3Ba1UCoQqNsVY2Lc8wtpreaXBOCtRY1HYE2sFXUC+5Mt8Er56S9V8vuG3y+k0LzpJ8vl58uV3jRigzRTTiqmARt4bwHhpIJEBJVgC8y+N8L8cKVIDroM17FTymoYDJZtccrjdxgYP7PAG9Rs35UuB7zvL3EOHo6BQTTCXYZABpbUWl8yrxSrkpVG/LlH/dp+8mpI3M8ssp24epVe2RSVB9q3tMO56dpdwiCmv5j8QJUBCm5heod/vHb8o6+s5TLt9KZb6XXxlvzBTt/wDZU5D0H+cps8FQqjMxu7tmc9Tb6TncJTFwx5aATbw2IsvvM645d9rnd46jYV5k/aXE5cPUA3cZB6N7XyvJziQB3M5vj2KzvkHsoLH9Z3+G3xm8stYs8OG8pfoXA8cfBCE+ambD/psSV+BuPhNZ8RmW/b5zkcNUKPmGosVYdVO/8+6aeHxW4vodjOUzduTGeW3Q4evnRh95TmH1kDPoRrYi4lHAVcrdiJKany+l5rz3HO9U5rOuU7gWmPWoPTYum40dd1Ze4lwOQbjrJnYML89j3ExU8tXpnuuYZ00NtV/zeNwzgNfbkR1EsJRsCNbXsDJcDg87olrksLntzPwmZ7Yy5JNus+z1MhGJ2Lkr3XkZqmRooAAAsALAdANo+87Pm5ZeVtKKNilZVoobRsKdJFjBHrAUNoIrwhhlHjiFqL25EMfQHWXyIjYgg6gixHIiSxqXV24FpJh8Mzmyi5nTvwKkTfzgfhBFvmJZXDJTFkWw5ncn1Mx4vReeSdOZxWHNMgb3F79ZXeuRpN/imFzpddWXUDqOYmAmFdzlUE9e3rM5bldOPl3O1fE8SZbke1so6dzKFLY31J19TLWKo6ehkCpymcrXqxzkxR+HqJOtK20t4fCFgWA9nU+m0DLqIkYvLvo5Da3aXf6V3UMovrt1k2E4WzqG0UX58x1m9ToKiqo2A/wzpjj9Xm5ObXr2oYbg6tTCtpU9rN0PQ9RMzE8MrIbZGboVBYH4TqsOdZbE14xxnNlGXwfh+SkVqKCXbMykA2FrAHv/ADLtDC00uURVJ3I3k5gl0xllbbSigMIlYCKG8UCsTCBAYYBEesjEkWFEwGExGECNAhMWaAjIcRtJSZHW2gV6Zj7DkAOtowC0cDIMXivCyxL0xe58y9+olOnwSoWBIAHcj6Tp5HWXcjpM3GOs5cpNMvhLBXqU9DrbXmJd/wCFUgc2XXexJI+ExeHsTXN9y3xnUmTHtzmV+piD4RNCTGvOiHYU6mXRKWE5y6IIUF4TBADGJDDAIBiiigVjBmj4GEAK0kUyO0kSA4wXhMZKHGNtHxkgIEZUjyIyoNIEDQRxEREgV4120PpCIyqND6QMDhq/8wexM6ciczwk3rn3zqCJnH0RERGVDpJGkTzYmwY0lpZDhhpJhAJihgMBRmbWEyM7wJrxSO8MCMRMY2NlBvJEMijgZFS3gvFaC0qHAwGIQrIDGOJIBGOIFYxFoKjWlR6hO0Cy9QCU6uJNj6RCiTuYquFGU+kmxjcMq5a1+pnXK4O85Hh6DxbHrOpawEzx+k2c5kQTXWJGvJbTelTUxpHgxqwwHXgMUBMBpMVtIgYjKGxQ3ggNEQjbxXgOtCDG5olOsglWJogYrwCIgYgYDAfeR1GhJlSrU1gNqaxioBH3jTM1TM8jxFQ5T6SYJIcUvlPpA5/DOfE986YagTk6D2qe+dTRa6gzGFZiUPl2j0e8haOQzrtV9DETG0jpHESh4EFolMBgK0DGJoyAooYoEF4gYLxAwC0StCGEFhAmRo4GMSOuIDlj4xYS0gFSY+LexmpUeY2POsgt0nuJMFmThsRbQzXpODIHBJDiKd1PpLYjgBaXRtwNcZXI7zq+Hm6CU8dwfO+cbX1E1MPSCqBOWGNlu0iN1jGqWsJJiKgAmdTfO86q2qDaSYmV6MnmgVMdAojrQIXaINHMsblgC8UMUCERGNzQZpQ8GICR3PKOVoE6RNGZoC0gkvCWkeaBjALTNxdO8vFpUqG5koynUg3lzCY22hklbD3EznwxGomN6a06SjUVufwkxXvOVFV12vHDiNQczNSs6dC7W5ytVxSruZivxBz1lVyzHWXcTS5i8WXNllvhtIixlPC4bWbuFS1pFWUGkkAivaAmaDw0dmkGYCHxJQneMvCxjCYZOvDGZoIaQrtCIooZPjHiiho8R8UUgETxRQIjITvFFAfK9YRRTFVUqCVKsUUyqGS0N4oppGvhhNFIIpqJUrRRRTQjeIRRQyTxCCKAooooaf/Z" alt="100,000+ Best Flower Images · 100% Free Download · Pexels Stock Photos" style="width: 194px; height: 259px; margin: 0px;" alt="submit" width="48" height="48"><br>

            <label for="fileId">select a file:</label>
            <input type="file" id="fileId" name="file" multiple><br>

            <input type="hidden" id="hiddenId" name="hidden" value="<?php rand(); ?>"><br><br>

            
            <label for="numberId">quantity (between 0 and 100):</label>
            <input type="number" id="numberId" name="number" min="0" max="100" step="10" value="1" required><br>

            <label for="rangeId">volume (between 0 and 50):</label>
            <input type="range" id="rangeId" name="range" min="0" max="50"><br>


            <label for="searchId">search google</label>
            <input type="search" id="searchId" name="search" size="50"><br>

            
            
            <input type="reset"><br>
            <button type="button" onclick="alert('hello')">button</button><br>
            <input type="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>