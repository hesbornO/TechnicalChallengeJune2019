 
Oswago Hesborn
University of Nairobi
Reg: P15/44220/2017

______________
TASK ONE:
______________

Using an object oriented programming language,
write a program that given hundreds of documents,
can find all documents with words containing the letter "a" in them

Language: Python 3

How to run the program in windows environment

Prerequisite: computer should have python 3 or later version installed

step 1: store all the files to be considered in one folder
NB: download the files in the provided 'data folder' and put them in the same folder

step 2: Load the program file(readMultipleFilesInAFolder.py) on a python enabled compiler

step 3 : copy the absolute path of the new folder with the files in line 49 from column 28
        for example : 'C:/Users/USER/Documents/*.txt' in line 49
        replace this path with absolute path of new folder with downloaded files
        NB: remember to specify the file type of the files

step 4: Run the file
        4.1 In the compiler, locate the compile/build icon, click on it
            -build the program then run it in the compiler terminal
            -you can type python readMultipleFilesInAFolder.py to run the program
        
        4.2 Using OS command line interface
            - start the cmd by typing Win + R, type cmd and hit enter
            - change directory to the directory with the program file(readMultipleFilesInAFolder.py)
            -type python readMultipleFilesInAFolder.py to run

The program sequentially searches the files and looks for the letter in question(letter a)
If found, the file is added to the list set aside for storing such files
The files with letter in question(are then displayed)
The program terminates here


