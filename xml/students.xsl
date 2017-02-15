<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <link rel="stylesheet" href="students.css"/>
            </head>

            <body>
                <div class="img-box">
                    <a href="http://technologe.at">
                        <img src="../imgs/technologe.png" alt="technologe"/>
                    </a>
                </div>

                <xsl:for-each select="students/student">
                    <div class="entry">
                        <p>
                            <xsl:value-of select="grade"/> - <xsl:for-each select="subjects">
                            <xsl:value-of select="subject">, </xsl:value-of>
                        </xsl:for-each><br />
                            <span><xsl:value-of select="firstname"/> <xsl:value-of select="lastname"/></span>
                        </p>
                    </div>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>