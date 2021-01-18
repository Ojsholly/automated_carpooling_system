# Google Place Picker
Google's Place Picker library for web like Android and iOS

<img src="https://raw.githubusercontent.com/bewithdhanu/Google-Place-Picker/master/PlacePicker.png" width="150" height="150"></img>

### Features

- No need to write a lots of code for Google Place Picker
- Supports with jquery(3.0 or 3+), bootstrap(3.0 or 3+) and fontawesome libraries
- easily to use this PlacePicker with simple steps
- You can pick location from map or you can search location
- Compatible with all  browsers (IE8+), and mobiles;
- Support with Google API Key;
- displays a button an the end of yout input, by clicking button you will see popup screen


### Usage


#### Javascript　

```javascript
$(document).ready(function(){
	$("#pickup_country").PlacePicker({
		title:"Popup Title Here",
		key:"YOUR_API_KEY",
		btnClass:"btn btn-secondary btn-sm",
		center: {lat: 17.6868, lng: 83.2185},
		success:function(data,address){
			//data contains address elements and 
			//address conatins you searched text
			//Your logic here
		}
	});
});

```

#### HTML code

```html
<script src="https://raw.githubusercontent.com/bewithdhanu/Google-Place-Picker/master/PlacePicker.js"></script>

```

#### Images

Image:

![](https://raw.githubusercontent.com/bewithdhanu/Google-Place-Picker/master/Screenshot%202019-04-03%20at%204.43.24%20PM.png)

> How map button lokks like in HTML Page

![](https://raw.githubusercontent.com/bewithdhanu/Google-Place-Picker/master/Screenshot%202019-04-03%20at%204.44.31%20PM.png)

> How map button lokks like in HTML Page

### Required Plugins
- jQuery
- Bootstrap (css & js)
- Font Awesone

                    
#### Tables
                    

#### Functions
| Function name | Description                    |
| ------------- | ------------------------------ |
| `success()`      | with 2 parameters, one is for address components, anothe ron eis for searched address.       |
#### Parameters
| Parameter name | Description                    |
| ------------- | ------------------------------ |
| key      | Your Google API Key |
| title      | Popup Title |
| center      | Default map location |
| btnClass      | Default btn class which comes on hover |
| zoom      | Default map zoom |

----

### End
