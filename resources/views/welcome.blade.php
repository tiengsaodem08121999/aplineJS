<!DOCTYPE html>
<html>
	<head>
		@vite(['resources/js/app.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	</head>
	<body>
        {{-- <div x-data="{records: [1, 2, 3, 4, 5]}">
            <div x-show="records.length"> Some Conetent</div>
        </div> --}}

        {{-- <div x-data="{number: 0}">
            <button x-on:click="number++"> Increnemt</button>
            <div x-text="number">
            </div>
            <div x-show=" number >= 10">
                that's is big number
            </div>
        </div> --}}


        {{-- lesson 4 --}}
        {{-- <form x-data="{ name: ''}" x-on:submit.prevent="console.log(name)">
            <input type="text" x-model="name">
            <button type="submit">Submit</button>
        </form>
        
        <div 
            x-data = "{
                name: '',
                makeNameUppercase (){
                    this.name= this.name.toUpperCase()
                }

            }"
        >
            <input type="text" x-model="name">
            <span x-text="name"></span>
            <button type="button" x-on:click="makeNameUppercase"> Uppercase</button>
        </div>
         --}}

    
         {{-- <div x-data="{
            query: '',
            img:'',

            getImnage() {
                this.img = this.query;
            }

        }">
            <form x-on:submit.prevent="getImnage">
                <input type="text" x-model="query" >
                <button type="submit">Search</button>
            </form>
            
            <div x-show="img">
                <img x-bind:src="`{{ asset('image/${query}.png') }}`">
            </div>
         </div> --}}


         {{-- lesson 6 : more input --}}

        {{-- <div x-data="{ agreed: false}">
            <input type="checkbox" x-model="agreed"> 
            <span x-show="agreed">
                You have agreed</span>   
        </div> --}}

        {{-- <form 
            x-data="{
                users: [],
                deleteUser () {
                    console.log(this.users)
                }
            }" 
            x-on:submit.prevent="deleteUser">

            <input type="checkbox" x-model="users" value="1"> Alex
            <input type="checkbox" x-model="users" value="2"> Billy
            <input type="checkbox" x-model="users" value="3"> Mabel
            <button type="submit">Delete</button>
        </form> --}}

        {{-- <div x-data="{plan: 'Monthly'}">
            <select x-model="plan">
                <option value="Yearly">Yearly</option>
                <option value="Monthly">Monthly</option>
            </select>
            <span x-show="plan" x-text="`You've chosen the ${plan} `"></span>
        </div> --}}

        {{-- <div x-data="{plan : 'monthly'}">
            <input type="radio" x-model="plan" value="monthly">
            <input type="radio" x-model="plan" value="yearly">

            <span x-text="plan"></span>
        </div> --}}

        
        {{-- lesson 9 : Text and HTML --}}

            {{-- <div x-data="{hello: 'hello world'}">
                <h1 x-text="hello"></h1>
            </div> --}}

            {{-- <div x-data="{body: '<strong>Hello</strong>'}">
                <span x-html="body"></span>
            </div> --}}
        
    </body>
   
</html>