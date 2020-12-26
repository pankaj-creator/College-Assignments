### Caesar Cipher in Cryptography
<br>
The Caesar Cipher technique is one of the earliest and simplest method of encryption technique. It’s simply a type of substitution cipher, i.e., each letter of a given text is replaced by a letter some fixed number of positions down the alphabet. For example with a shift of 1, A would be replaced by B, B would become C, and so on. The method is apparently named after Julius Caesar, who apparently used it to communicate with his officials.<br>
Thus to cipher a given text we need an integer value, known as shift which indicates the number of position each letter of the text has been moved down.<br>
The encryption can be represented using modular arithmetic by first transforming the letters into numbers, according to the scheme, A = 0, B = 1,…, Z = 25.<br> Encryption of a letter by a shift n can be described mathematically as.<br>
<br>

<img src="/Images/formula.png"/><br>

# Example:
<img src="/Images/caesar_shift_cipher.jpg"/><br>
<br>

## Algorithm for Caesar Cipher:

#    Input:
        1. A String of lower case letters, called Text.
        2. An Integer between 0-25 denoting the required shift.

#    Procedure:
        Traverse the given text one character at a time.
        For each character, transform the given character as per the rule, depending on whether we’re encrypting or decrypting the text.
        Return the new string generated.

<br>
    Program that receives a Text (string) and Shift value( integer) and returns the encrypted text.
<br>