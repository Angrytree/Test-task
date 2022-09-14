# This is a test task.
It contains two functions:

## Boolean isBalanced(String)
This function takes one parameter as string that contains chars as : # { # }, # [ # ], # ( # ) and returns boolean depends on if all open chars are closed correctly.
For example :
String "{a}[(b)c]" - is balanced and result will be True;
String "()([a]){" - is not balanced and result will be False;

## Array arrayMultiply(Array, Int)
This function takes two parameters, Array and Int and returns result of multiplying Array on Int. Also Array parameter can be nested.
For example :
Array [1, 2, 3, [4, 5, 1], [2, 2, [3, 4]]] and Int 2 returns [2, 4, 6, [8, 10, 2], [4, 4, [6, 8]]]
