<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                version="1.0">

    <!-- Template for the whole XML document -->
    <xsl:template match="/">

        <!-- HTML output -->
        <html>
        <head>
            <title>Employee List</title>
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                table, th, td {
                    border: 1px solid black;
                }
                th, td {
                    padding: 8px;
                    text-align: left;
                }
            </style>
        </head>
        <body>

            <h2>Employee List</h2>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Employee ID</th>
                    <th>Department</th>
                    <th>Salary</th>
                </tr>

                <!-- Loop through each employee element -->
                <xsl:for-each select="employees/employee">
                    <tr>
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="id"/></td>
                        <td><xsl:value-of select="department"/></td>
                        <td><xsl:value-of select="salary"/></td>
                    </tr>
                </xsl:for-each>

            </table>
        </body>
        </html>

    </xsl:template>

</xsl:stylesheet>
