
const CLASS_NAME_SHOW = 'show';

const AUTO_CLOSE = true;




function Dropdown() {
    const dropdownWrap = document.querySelectorAll('.js-dropdown-wrap');

    if(dropdownWrap) {
    
        const openDropdown = (event, menu) => {
            menu.classList.add('is-open');
        }

        const closeDropdown = (event, menu) => {
            menu.classList.remove('is-open')
        }

        const toggleDropdown = (event, menu, isOpen) => {
            menu.classList.toggle('is-open')
        }

        function onClickAwayCloseDropdown(event, menu, button) {
            const clickInside = button.contains(event.target);
    
            if (!clickInside) {
                closeDropdown(event, menu);
            }
        }

        dropdownWrap.forEach(wrap => {
            const menu = wrap.querySelector('.js-dropdown-menu')
            const button = wrap.querySelector('.js-dropdown-button')
            const isOpen = wrap.classList.contains('is-open')

            button.addEventListener('click', event => toggleDropdown(event, menu, isOpen));
            document.addEventListener('click', event => onClickAwayCloseDropdown(event, menu, button));
        })

    }
}

export default Dropdown;


// class Dropdown extends BaseComponent {

//     constructor(_dropdownWrap, _isShown) {
//         this._dropdownWrap = false;
//         this._isShown = false;
//     }

//     // test() {
//     //     console.log(this._dropdownWrap)
//     // }
// }

// let hi = new Dropdown;
// hi.test()

// class Select extends BaseComponent {

// }



// // Usage
// <div class="js-dropdown-wrap">
//     <button class="js-dropdown-button">My Account</button>
//     <ul class="js-dropdown-list">
//         <li><a href="">Profile</a></li>
//         <li><a href="">Settings</a></li>
//         <li><a href="">Logout</a></li>
//     </ul>
// </div>


// class Select extends Component {
//     // Same functionality as dropdown, but now the button changes the value based on selected `js-select-item`
// }

// // Usage Select
// <div class="js-select-wrap">
//     <button class="js-select-button">Selected: {value}</button>
//     <input value="" class="hidden" />
//     <ul class="js-select-list">
//         <li class="js-select-item">Profile</li>
//         <li class="js-select-item">Settings</li>
//         <li class="js-select-item">Logout</li>
//     </ul>
// </div>






// function closeDropdown() {

// }

// function openDropdown() {
//     // add closing class
// }

// function toggleDropdown() {

// }

// function clickAwayClosemen() {

// }

// js-dropdown-wrap
// js-dropdown-button
// js-dropdown-menu

// on select close
// function hasClass(element, className) {
//     if(element) return element.classList.contains(className);
//     else return false;
//   }
  
//   function addClass(element, className) {
//     if (element) return element.classList.add(className);
//   }
  
//   function removeClass(element, className) {
//     if (element) return element.classList.remove(className);
//   }


// if class does not contain 'active'? 
// if clicked outside the 'ul' view, close it (what if you click from dropdown to select, dropdown would stay open if you clear oonly dropdowns)
  


// // instead of state, has 'does contain X class' maybe
// function Dropdown() {

//     const dropdownWrap = document.querySelectorAll('.js-dropdown-wrap');
//     let open = false;

//     if(dropdownWrap) {
    
//         const openDropdown = (event, menu) => {
//             menu.classList.remove('opacity-0', 'invisible')
//             return state = true;
//         }

//         const closeDropdown = (event, menu) => {
//             menu.classList.add('opacity-0', 'invisible')
//             return state = false;
//         }

//         const toggleDropdown = (event, state, menu, button) => {

//             // if contains class, but open - close
//             // if contains class, but close - open
//             // openDropdown(event, menu);
//             // closeDropdown(event, menu);

//             // if(button.classList.contains('js-dropdown-button')) {
//             //     let state = true;
//             // } else {
//             //     let state = false;
//             // }
//         }
        

//         dropdownWrap.forEach(wrap => {
//             let menu = wrap.querySelector('.js-dropdown-menu')
//             let button = wrap.querySelector('.js-dropdown-button')
//             let state = false;
            
//             menu.classList.add('opacity-0', 'invisible', 'ease-in-out', 'duration-100');
//             button.addEventListener('click', event => toggleDropdown(event, false, menu, button));
//             // window.addEventListener('click', event => onClickAwayCloseDropdown(event, menu));
//         })
//     }

 

//     //     const closeAllDropdowns = () => {
//     //         stateDropdownOpen = false;

//     //         dropdownWrap.forEach(wrap => {
//     //             let menu = wrap.querySelector('.js-dropdown-menu')
//     //             menu.classList.add('opacity-0', 'invisible')
//     //         })
//     //     }

//     //     const openDropdown = (event, menu) => {
//     //         menu.classList.remove('opacity-0', 'invisible')
//     //         stateDropdownOpen = true;
//     //     }

//     //     const closeDropdown = (event, menu) => {
//     //         menu.classList.add('opacity-0', 'invisible')
//     //         stateDropdownOpen = false;
//     //     }

//     //     const onClickAwayCloseDropdown = (event, menu) => {
//     //         if(!menu.contains(event.target)) {
//     //             closeDropdown(event, menu); 
//     //         }
//     //     }


//         // dropdownWrap.forEach(wrap => {
//         //     let menu = wrap.querySelector('.js-dropdown-menu')
//         //     let button = wrap.querySelector('.js-dropdown-button')

//         //     menu.classList.add('opacity-0', 'invisible', 'ease-in-out', 'duration-100');
//         //     button.addEventListener('click', event => toggleDropdown(event, menu));
//         //     // window.addEventListener('click', event => onClickAwayCloseDropdown(event, menu));
//         // })

//     // }

  
// }
