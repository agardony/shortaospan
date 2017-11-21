This is modification of Nelson Rouque's php implementation of the automated operation span task (aospan).

see: https://github.com/nelsonroque/aospan for original code

This version of the task is shortened from about 20 minutes to 8 minutes. It follows guidelines from the psychological
literature that show that truncated WMC tasks retain reliability and validity while allowing working memory to be
assessed quickly and allowing researchers to measure other constructs within the natural limits of testing time and the 
natural limits on test-taker’s patience.

Design guideliness were obtained from: https://link.springer.com/article/10.3758/s13428-014-0543-2

Compared to the full aospan, this task presents 2 iterations of set sizes 4,5, and 6 for a total of 30 trials (compared to 75 in the original task).

In addition, a few bug fixes were implemented, described in CHANGE LOG below.

How to use this software:

Files should be uploaded to folder named aospan in root directory of your website:
e.g. http://yourwebsite.com/shortaospan

Then using a text editor replace all instances of cognitivetask.com in the files with your website URL (e.g. yourwebsite.com)

You can quickly do this using the find in files feature of Notepad++: https://www.templatemonster.com/help/how-to-use-the-find-in-files-feature-in-notepad.html

To run the experiment navigate to the following URL: http://yourwebsite.com/shortaospan

Optionally, the URL can take the following parameters (that I know of):

study=the name of your study, this will store data in http://yourwebsite.com/shortaospan/data/yourstudyname
not setting the study parameter will default the study name to SHORTAOSPAN

MID=the worker ID of your participant (for interacting with mTurk)
not setting the MID parameter will default the worker ID to NO_WORKER_ID

ex. usage) yourwebsite.com/shortaospan/index.php?study=yourstudyname&MID=workerID

To access data from the task, navigate to http://yourwebsite.com/shortaospan/data


CHANGE LOG


Issue: If response to math problems is double clicked you get twice the credit.
Solution: Implemented button disabling after clicks to prevent double clicks.

Issue: At times, feedback is grammatically incorrect ("You made 0 math error, you made 1 math errors")
Fixed.

Issue: For computing mean(RT) + 2.5 SD, SD was calculated wrong.
Fixed.

Issue: When making directories (for data storage on webserver), directories were not being created with full right permission (777).
Fixed.

