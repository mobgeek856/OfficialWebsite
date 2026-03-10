import Link from "next/link";

export const metadata = {
  title: "Privacy Policy - PUMPKIN TECHNOLOGY",
  description: "Privacy Policy for PUMPKIN TECHNOLOGY corporate website.",
};

export default function PrivacyPolicyPage() {
  return (
    <div className="container-custom section-padding">
      <Link href="/" className="mb-8 inline-block text-primary hover:underline">
        ← Back to Home
      </Link>
      <h1 className="mb-6 text-3xl font-bold">Privacy Policy</h1>
      <p className="text-white/80">
        This is a placeholder for the Privacy Policy. PUMPKIN TECHNOLOGY respects your privacy and is committed to protecting your personal data.
      </p>
    </div>
  );
}
