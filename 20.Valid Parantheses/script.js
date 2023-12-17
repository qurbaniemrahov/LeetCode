var isValid = function(s) {
    let stack = [];
    let brackets = {
        ')': '(',
        '}': '{',
        ']': '['
    };

    for (let i = 0; i < s.length; i++) {
        let char = s[i];
        if (char in brackets) {
            // Current character is a closing bracket
            let top = stack.pop();
            if (top !== brackets[char]) {
                return false;
            }
        } else {
            // Current character is an opening bracket
            stack.push(char);
        }
    }

    return stack.length === 0;
};