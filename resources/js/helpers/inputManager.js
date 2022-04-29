// =======================================================
// JS: Input Manager
// =======================================================

import keyCodes from "../config/keyCodes";

// InputManager.isInputEsc(event)
// isInput('enter', event)

export const isInputEsc = (event) => {
    if(!event) return;
    if(event.keyCode === keyCodes.esc) return true;
}

export const isInputEnter = (event) => {
    if(!event) return;
    if (event.keyCode === keyCodes.enter) return true;
}

