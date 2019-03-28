import glob     #module that finds all pathnames matching a specified pattern
import errno    #makes available standard errno system symbols 

#start of class
class checkFile:        
#store path of folder with files in path
    path = 'folderpath'

#finds pathnames matching pattern specified in path
    files = glob.glob(path)

#empty list to store files which have the letter in question
    filesWith_letter =[]

#letter to be looked for in files
    letter = 'anyletter'

#function to check for letter in each file, line by line 
#stops looking for letter on finding the first occurence of the letter
    def checkForLetter(self, letter):
        try:
            with open(name) as fin:
                    for line in fin:
                        
                        if line.__contains__(self.letter):                        
                            self.filesWith_letter.append(name)
                            break
                        else:
                            continue

#throws error if file is not found
        except IOError as exc:
            if exc.errno != errno.EISDIR:
                raise

#function to display files with letter in question among availed files
    def display(self):
        print(f"\nFound {len(self.filesWith_letter)} files with letter {self.letter}\n ")

        for number,file in enumerate(self.filesWith_letter):
            print(f"{number+1} : {file}")
    
#end of class

#creating checkMyFiles object of class checkFile
checkMyFiles = checkFile()

#providing absolute path of folders to be checked, and the specific file extension
checkMyFiles.folderpath = 'C:/Users/USER/Documents/*.txt'

#storing files that match the above pattern in checkMyFiles.files
checkMyFiles.files = glob.glob(checkMyFiles.folderpath)

#specifying the letter to look for in each file
checkMyFiles.letter = 'a'

#looking for the letter in each of the files
for name in checkMyFiles.files:
    checkMyFiles.checkForLetter(checkMyFiles.letter)

#displaying all the files which contain the specified letter
checkMyFiles.display()
