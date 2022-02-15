#!/usr/bin/perl
# HTTP Header
print"Content-Type:application/octet-stream; name=\"FileName\"\r\n";
print"Content-Disposition:attachment; filename=\"FileName\"\r\n\n";
# Actual File Content
open( FILE, "fileread.php" );
while(read(FILE, $buffer, 120) )
{ print("$buffer");
}

