<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $name ?? 'John Doe' }} – Resume</title>
    <style>
        @page {
            size: A4;
            margin: 20mm 18mm 20mm 18mm;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 11.5px;
            color: #000;
            margin: 0;
            padding: 0;
            line-height: 1.4;
        }

        h1 {
            font-size: 28px;
            text-align: center;
            color: #00723f;
            margin: 0;
            font-weight: bold;
        }

        .gold-line {
            border-bottom: 2px solid #d5aa3f;
            width: 100%;
            margin: 2px 0 6px 0;
        }

        .contact {
            text-align: center;
            font-size: 10.5px;
            color: #000;
            margin-bottom: 6px;
        }

        .contact span {
            margin: 0 8px;
        }

        .summary-title {
            font-weight: bold;
            font-size: 12px;
            margin: 0 0 4px 0;
            padding-bottom: 1px;
        }

        .summary-text {
            font-size: 11.5px;
            margin-bottom: 8px;
        }

        .section-title {
            font-weight: bold;
            font-size: 16px;
            color: #00723f;
            border-bottom: 2px solid #d5aa3f;
            margin-top: 14px;
            margin-bottom: 4px;
            padding-bottom: 1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            vertical-align: top;
            padding: 1px 0;
        }

        .right {
            text-align: right;
            white-space: nowrap;
            font-weight: 600;
        }

        ul {
            list-style: none;
            margin: 3px 0 3px 18px;
            padding: 0;
        }

        li {
            margin-bottom: 3px;
        }

        .skills-table td {
            width: 50%;
            padding: 1px 8px 1px 0;
        }

        .section {
            margin-bottom: 8px;
        }

        h1,
        .section-title,
        .summary-title {
            page-break-after: avoid;
        }

        .icon {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin-right: 4px;
            vertical-align: middle;
        }
    </style>
</head>

<body style="margin-top: -70px;" data-browser-style="margin-top:70px" ;>

    <h1>{{ $name ?? 'John Doe' }}</h1>
    <div class="gold-line" style="margin-top: -2px;"></div>
    <div class="contact" style="margin-top: -4px;">
        <span>
            <img class="icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0iTTIyIDE2LjkydjNhMiAyIDAgMCAxLTIuMTggMiAxOS43OSAxOS43OSAwIDAgMS04LjYzLTMuMDcgMTkuNSAxOS41IDAgMCAxLTYtNiAxOS43OSAxOS43OSAwIDAgMS0zLjA3LTguNjdhMiAyIDAgMCAxIDEuNzItMi4xOGgzYTIgMiAwIDAgMSAyIDEuNzIgMTIuODQgMTIuODQgMCAwIDAgLjcgMi44MSAyIDIgMCAwIDEtLjQ1IDIuMTFMOSA5LjcxYTE2IDE2IDAgMCAwIDYgNmwxLjI3LTEuMjdhMiAyIDAgMCAxIDIuMTEtLjQ1IDEyLjg0IDEyLjg0IDAgMCAwIDIuODEuN0EyIDIgMCAwIDEgMjIgMTYuOTJ6Ij48L3BhdGg+PC9zdmc+" alt="Phone">
            {{ $phone ?? '123-456-7890' }}
        </span>
        <span>
            <img class="icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0iTTQgNGgxNmEyIDIgMCAwIDEgMiAydjEyYTIgMiAwIDAgMS0yIDJINGEyIDIgMCAwIDEtMi0yVjZhMiAyIDAgMCAxIDItMnoiPjwvcGF0aD48cG9seWxpbmUgcG9pbnRzPSIyMiw2IDEyLDEzIDIsNiI+PC9wb2x5bGluZT48L3N2Zz4=" alt="Email">
            john.doe@example.com
        </span>
        <span>
            <img class="icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0iTTE2IDhhNiA2IDAgMCAxIDYgNnY3aC00di03YTIgMiAwIDAgMC0yLTIgMiAyIDAgMCAwLTIgMnY3aC00di03YTYgNiAwIDAgMSA2LTZ6Ij48L3BhdGg+PHJlY3QgeD0iMiIgeT0iOSIgd2lkdGg9IjQiIGhlaWdodD0iMTIiPjwvcmVjdD48Y2lyY2xlIGN4PSI0IiBjeT0iNCIgcj0iMiI+PC9jaXJjbGU+PC9zdmc+" alt="LinkedIn">
            linkedin.com/in/johndoe
        </span>
        <span>
            <img class="icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBhdGggZD0iTTkgMTljLTUgMS41LTUtMi41LTctMm41MmwzLjUgMS45NGE5IDkgMCAwIDAgNS4zNiAzLjM0bDMuNTMtMS45NmMtMi0uNS02LjUtMy41LTctMnoiPjwvcGF0aD48cGF0aCBkPSJNMTUgNWMtMS41IDEtMyAyLjUtMy41IDUuMDZhOSA5IDAgMCAxIDMuNTMgMy41M2MyLjUtLjUgNC0yIDUuMDYtMy41IiBzdHJva2UtbGluZWNhcD0icm91bmQiPjwvcGF0aD48L3N2Zz4=" alt="GitHub">
            github.com/johndoe
        </span>
    </div>
    <div class="gold-line" style="margin-top: -4px;"></div>

    <p style="margin-top: -5px;">
        <span style="color:#00723f; font-weight:bold; font-size:16px; " >Summary</span> —
        Simplified version of a monstrosity that I built back in college using current best practices.
    </p>

    <div class="section">
        <div class="section-title" style="margin-top: -5px;">Skills</div>
        <table class="skills-table" style="margin-left: 20px;">
            <tr>
                <td><strong>Automation</strong>: SaltStack, Ansible, Chef, Puppet</td>
                <td><strong>OS</strong>: Debian, Ubuntu, CentOS, BSD, AIX</td>
            </tr>
            <tr>
                <td><strong>Cloud</strong>: Salt-Cloud, Linode, GCP, AWS</td>
                <td><strong>Policies</strong>: CIS, SOC2, PCI-DSS, GDPR, ITIL</td>
            </tr>
            <tr>
                <td><strong>Languages</strong>: Python, Bash, PHP, Perl, VB/C#.Net</td>
                <td><strong>Testing</strong>: Pytest, Docker, CircleCI, Jenkins, Inspec</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title" style="margin-top: -5px;">Experience</div>
        <table>
            <tr>
                <td style="padding-left: 10px"><strong>Consulting Corp</strong><br><em>Senior DevOps Engineer (FTE Consultant)</em><br></td>
                <td class="right">Jul 2015 – Jun 2025</td>
            </tr>
        </table>
        <div style=" display:inline-block; margin-left:20px; border-bottom:1px solid black;">Client: Notable Placement</div>
        <ul>
            <li> - Analyzed network traffic patterns to identify bottlenecks and optimize performance</li>
            <li> - Implemented firewall rules to enhance security and prevent unauthorized access</li>
            <li> - Conducted vulnerability assessments and applied security patches</li>
            <li> - Collaborated with cross-functional teams to streamline IT processes</li>
        </ul>
        <div style=" display:inline-block; margin-left:20px; border-bottom:1px solid black;">Client: Challenges Unlimited</div>

        <ul>
            <li> - Configured monitoring tools to track system performance</li>
            <li> - Automated routine tasks to increase productivity</li>
            <li> - Documented system procedures for knowledge sharing</li>
            <li> - Participated in disaster recovery drills</li>
        </ul>

        <div style=" display:inline-block; margin-left:20px; border-bottom:1px solid black;">Client: Broken Galleries</div>
        <ul>
            <li> - Implemented hybrid cloud migration strategies</li>
            <li> - Optimized database performance through indexing</li>
            <li> - Conducted scalability assessments</li>
            <li> - Worked on incident resolution and RCA</li>
        </ul>

        <table>
            <tr>
                <td style="padding-left: 10px"><strong>HealthCo Industries</strong><br><em>Senior Systems Administrator (SRE)</td>
                <td class="right">Feb 2011 – Mar 2016</td>
            </tr>
        </table>
        <ul>
            <li> - Managed virtualized server environment spanning multiple data centers</li>
            <li> - Oversaw migration of critical business applications to cloud-based platforms</li>
            <li> - Configured and monitored network security measures, including firewalls and intrusion detection systems</li>
            <li> - Implemented multi-factor authentication for remote access to company systems</li>
            <li> - Streamlined patch management process, reducing vulnerabilities and downtime</li>
            <li> - Conducted regular vulnerability assessments and penetration testing</li>
            <li> - Automated server provisioning and configuration management tasks</li>
            <li> - Maintained documentation for IT policies and procedures</li>
            <li> - Coordinated responses to cybersecurity incidents with internal teams and external vendors</li>
        </ul>
    </div>

    <div class="section" style="margin-left: 10px;">
        <div class="section-title" style="margin-top: -5px;">Education</div>
        <p style="margin-top: -4px;" ><strong>State University</strong> <br> <em> Bachelor of Science in Computer Information Systems</em><br>
            <em>Minors: Networking, Network Security</em>
        </p>

        <div style="margin-top: -9px;"><strong>Certifications</strong></div>
        <ul style="list-style-type: none;">
            <li> - Salt • SaltStack Certified Engineer</li>
            <li> - GCP • Professional Cloud Architect</li>
        </ul>
    </div>

    <div class="section" style="margin-left: 10px;">
        <div class="section-title" style="margin-top: -5px;">Projects</div>
        <table style="width:100%; border-collapse:collapse; margin-bottom:4px;">
            <tr>
                <td style="text-align:left; padding-left:10px;">
                    <strong>Hospital / Health Science IRB</strong>
                </td>
                <td class="right" style="text-align:right; white-space:nowrap; ">
                    Mar 2015 – Present
                </td>
            </tr>
        </table>

        <ul style="margin-top: -4px;">
            <li> - Served as non-scientific/unaffiliated patient-representative</li>
            <li> - Reviewed consent forms for completeness and accuracy</li>
            <li> - Worked with OHRP and HIPAA regulations</li>
        </ul>
        <table style="width:100%; border-collapse:collapse; margin-bottom:4px;">
            <tr>
                <td style="text-align:left; padding-left:10px;">
                    <strong>Debian Linux</strong>
                </td>
                <td class="right" style="text-align:right; white-space:nowrap;">
                    Jan 2001 – Present
                </td>
            </tr>
        </table>

        <ul style="margin-top: -4px;">
            <li> - Maintained packages in Debian repositories</li>
            <li> - Resolved bugs reported in bug tracking system</li>
        </ul>
    </div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-browser-style]').forEach(function(el) {
            el.style.cssText += el.getAttribute('data-browser-style');
        });
    });
</script>

</html>