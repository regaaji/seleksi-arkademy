function checkHex(input) {
    var check, code, len;
    if(typeof input == 'string') {        // check it's a string
        if(input[0] === "#") {            // and it starts with #
            len = input.length;
            // if (len === 4 || len === 7 || len == 5 || len == 9) { // 5 and 9 for #RGBA and #RRGGBBAA
            if (len === 4 || len === 7) { // and it's 4 or 7 characters
                input = input.toLowerCase(); // convert to lower case
                // parse it as hex and output as hex with # prefix
                check = '#' + ('00000000' + parseInt(input.substr(1), 16).toString(16)).substr(1 - len);
                // check it's the same number
                return check === input;
            }
        }
    }
    // all other conditions fall thru to here
    return false;
}

console.log(checkHex("#FFF"));
console.log(checkHex("#e3e3e3"));
console.log(checkHex("#ata910"));
